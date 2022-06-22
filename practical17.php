<html>
    <ol>
    <?php
$file =fopen("rishabh.txt","r");

echo fgets($file);
echo ftell($file);
echo fseek($file,15);
echo ftell($file);
echo fpassthru($file);
echo rewind($file);
echo fgetc($file);
while(!feof($file))
{
    $line = fgets($file);
    echo $line;
}
?>
</ol>
</html>