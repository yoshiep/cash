<?php
require('library/fpdf.php');
include './config/koneksi.php';

  // intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$tahun=  date("Y"); 
$pdf->SetFont('Times','B',13);
$pdf->Cell(300,10,' "Mulyadi Family Goes to Eourope" Tahun ' . $tahun,0,1,'C');
$pdf->Cell(70,10,'Rincian Pembayaran Kas perbulan',0,1,'C');
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(30,7,'Nama' ,1,0,'C');
$pdf->Cell(20,7,'Januari',1,0,'C');
$pdf->Cell(20,7,'Februari',1,0,'C');
$pdf->Cell(20,7,'Maret',1,0,'C');
$pdf->Cell(20,7,'April',1,0,'C');
$pdf->Cell(20,7,'Mei',1,0,'C');
$pdf->Cell(20,7,'Juni',1,0,'C');
$pdf->Cell(20,7,'Juli',1,0,'C');
$pdf->Cell(20,7,'Agustus',1,0,'C');
$pdf->Cell(20,7,'September',1,0,'C');
$pdf->Cell(20,7,'Oktober',1,0,'C');
$pdf->Cell(20,7,'November',1,0,'C');
$pdf->Cell(20,7,'Desember',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($conn,"SELECT a.nama,b.jumlah Januari,c.jumlah februari,d.jumlah Maret,e.jumlah April,f.jumlah Mei,g.jumlah Juni,
                            h.jumlah Juli,i.jumlah Agustus,j.jumlah September
                            ,k.jumlah Oktober,l.jumlah November,m.jumlah Desember
                            FROM anggota a left outer join kas b on a.nama=b.nama and b.bulan='januari' and b.tahun=year(CURRENT_DATE)
                            left outer join kas c on a.nama=c.nama and c.bulan='februari' and c.tahun=year(CURRENT_DATE)
                            left outer join kas d on a.nama=d.nama and d.bulan='Maret' and d.tahun=year(CURRENT_DATE)
                            left outer join kas e on a.nama=e.nama and e.bulan='April' and e.tahun=year(CURRENT_DATE)
                            left outer join kas f on a.nama=f.nama and f.bulan='Mei' and f.tahun=year(CURRENT_DATE)
                            left outer join kas g on a.nama=g.nama and g.bulan='Juni' and g.tahun=year(CURRENT_DATE)
                            left outer join kas h on a.nama=h.nama and h.bulan='Juli' and h.tahun=year(CURRENT_DATE)
                            left outer join kas i on a.nama=i.nama and i.bulan='Agustus' and i.tahun=year(CURRENT_DATE)
                            left outer join kas j on a.nama=j.nama and j.bulan='September' and j.tahun=year(CURRENT_DATE)
                            left outer join kas k on a.nama=k.nama and k.bulan='Oktober' and k.tahun=year(CURRENT_DATE)
                            left outer join kas l on a.nama=l.nama and l.bulan='November' and l.tahun=year(CURRENT_DATE)
                            left outer join kas m on a.nama=m.nama and m.bulan='Desember' and m.tahun=year(CURRENT_DATE)");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(30,6, $d['nama'],1,0);
  $pdf->Cell(20,6, $d['Januari'],1,0);  
  $pdf->Cell(20,6, $d['februari'],1,0);
  $pdf->Cell(20,6, $d['Maret'],1,0);  
  $pdf->Cell(20,6, $d['April'],1,0);
  $pdf->Cell(20,6, $d['Mei'],1,0);  
  $pdf->Cell(20,6, $d['Juni'],1,0);
  $pdf->Cell(20,6, $d['Juli'],1,0);  
  $pdf->Cell(20,6, $d['Agustus'],1,0);
  $pdf->Cell(20,6, $d['September'],1,0);
  $pdf->Cell(20,6, $d['Oktober'],1,0);  
  $pdf->Cell(20,6, $d['November'],1,0);
  $pdf->Cell(20,6, $d['Desember'],1,1); 
}
 
$pdf->Output();
 
?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
