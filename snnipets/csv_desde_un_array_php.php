Generate CSV file from a PHP array
Here is a simple but efficient function to generate a .csv file from a PHP array. The function accept 3 parameters: the data, the csv delimeter (default is a comma) and the csv enclosure (default is a double quote).

<?php
  function generateCsv($data, $delimiter = ',', $enclosure = '"') {
         $handle = fopen('php://temp', 'r+');
         foreach ($data as $line) {
                 fputcsv($handle, $line, $delimiter, $enclosure);
         }
         rewind($handle);
         while (!feof($handle)) {
                 $contents .= fread($handle, 8192);
         }
         fclose($handle);
         return $contents;
  }
?>