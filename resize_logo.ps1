Add-Type -AssemblyName System.Drawing
$sourcePath = "c:\Users\amity\OneDrive\Desktop\MD\assets\logo.png"
$destPath = "c:\Users\amity\OneDrive\Desktop\MD\assets\favicon.png"

$img = [System.Drawing.Image]::FromFile($sourcePath)
$size = [math]::Max($img.Width, $img.Height)

$bmp = New-Object System.Drawing.Bitmap($size, $size)
$bmp.SetResolution($img.HorizontalResolution, $img.VerticalResolution)
$graphics = [System.Drawing.Graphics]::FromImage($bmp)
$graphics.Clear([System.Drawing.Color]::Transparent)

$x = [math]::Round(($size - $img.Width) / 2)
$y = [math]::Round(($size - $img.Height) / 2)

$graphics.DrawImage($img, $x, $y, $img.Width, $img.Height)
$bmp.Save($destPath, [System.Drawing.Imaging.ImageFormat]::Png)

$graphics.Dispose()
$bmp.Dispose()
$img.Dispose()
