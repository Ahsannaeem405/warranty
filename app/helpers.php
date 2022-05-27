<?php
function csvToArray($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    $head = array("name",  "image", "price", "purchased_date", "serial_no", "expiry_date", "sku", "description"); 

    if (($handle = fopen($filename, 'r')) !== false)
    {
        $counter = 0;
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            // if (!$header)
            //     $header = $row;
            // else
            // dd($header);
            
                $data[] = array_combine($head, $row);
        }
        fclose($handle);
    }

    return $data;
}
?>