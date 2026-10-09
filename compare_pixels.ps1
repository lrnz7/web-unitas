Add-Type -AssemblyName System.Drawing

$img1 = [System.Drawing.Bitmap]::FromFile('C:\laragon\www\web-unitas\qa\before\desktop-1440px.png')
$img2 = [System.Drawing.Bitmap]::FromFile('C:\laragon\www\web-unitas\qa\after\desktop-1440px.png')

$totalPixels = $img1.Width * $img1.Height
$diffCount = 0

# Check every 2nd pixel for speed
$step = 2
$samplePixels = 0

for ($x = 0; $x -lt $img1.Width; $x += $step) {
    for ($y = 0; $y -lt $img1.Height; $y += $step) {
        $samplePixels++
        $p1 = $img1.GetPixel($x, $y)
        $p2 = $img2.GetPixel($x, $y)
        
        $dr = [Math]::Abs($p1.R - $p2.R)
        $dg = [Math]::Abs($p1.G - $p2.G)
        $db = [Math]::Abs($p1.B - $p2.B)
        
        # Consider difference if color channel difference > 5
        if ($dr -gt 5 -or $dg -gt 5 -or $db -gt 5) {
            $diffCount++
        }
    }
}

$img1.Dispose()
$img2.Dispose()

$diffPercent = [Math]::Round(($diffCount / $samplePixels) * 100, 2)
Write-Output "Total Sampled: $samplePixels"
Write-Output "Differences: $diffCount"
Write-Output "Pixel Diff: $diffPercent%"
