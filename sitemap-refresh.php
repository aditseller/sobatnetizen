 <?php
$namaServer = "localhost";  
//$namaServer = "127.0.0.1"; // via TCP/IP
$namaUser = "root";
$password = "";
$db = "idearoom";
// membuat koneksi
$conn = mysqli_connect($namaServer, $namaUser, $password, $db);

// Check koneksi
if (!$conn) {
     die("Koneksi Error: " . mysqli_connect_error());
}
echo "";
?>

<?php 

$xml  ="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
$xml .="<urlset\r\n";
$xml .="xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\r\n";
$xml .="xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\r\n";
$xml .="xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9\r\n";
$xml .="http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">";


$xml .= '<url>';
$xml .= ' <loc>https://www.sobatnetizen.com/</loc>'; // sesuaikan dengan tabel artikel Anda
$xml .= ' <priority>1.0</priority>';
$xml .= ' <lastmod>'.date('c',time()).'</lastmod>';
$xml .= ' <changefreq>weekly</changefreq>';
$xml .= '</url>';
      
$sql         = "SELECT * FROM `read` ORDER BY created_at DESC"; //sesuaikan dengan tabel database Anda 
$query         = mysqli_query($conn, $sql);

while($data    = mysqli_fetch_array($query))
{
$xml .= '<url>';
$xml .= ' <loc>https://www.sobatnetizen.com/read/'.$data['url'].'</loc>'; // sesuaikan dengan tabel artikel Anda
$xml .= ' <priority>0.80</priority>';
$xml .= ' <lastmod>'.date('c',time()).'</lastmod>';
$xml .= ' <changefreq>weekly</changefreq>';
$xml .= '</url>';
}
if (!$query) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$xml .= '</urlset>';

//buat ke dalam file sitemap.xml
$a = fopen('sitemap.xml',"w");
fputs($a, $xml);
fclose($a);

?>