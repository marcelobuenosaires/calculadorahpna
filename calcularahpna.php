<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<br>
    <center>
      <h1> <span style="color: #3366ff;">Projeto Calculadora HPNA Web </span></h1>
      <form method="post"> <br>
        <br>
        <span style="color: #090328;"><b>Quantidade de Divisor de 1:2 (
            Splitters )</b> &nbsp; <input name="txtv1" type="text"> <br>
          <br>
          <b>Quantidade de Divisor de 1:4 ( Spitters )</b> &nbsp;&nbsp; <input

            name="txtv2" type="text"> <br>
          <br>
          <b>Quantidade de Conectores RG6 &nbsp;</b> &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; <input name="txtv3" type="text"> <br>
          <br>
        </span><b style="color: #1a3585;"><span style="color: #2710af;"><span style="color: #090328;">Quantidade
              de metros de cabo Coaxia</span>l&nbsp;&nbsp;</span>&nbsp;</b>
        &nbsp;&nbsp; <input name="txtv4" type="text"> <br>
        <br>
       
        <p> <input value="Calcular" type="submit"> </p>
       
      </form>
      <?php   
  error_reporting(0);    if ($_POST){	  $v1=$_POST['txtv1'];	  $v2=$_POST['txtv2'];	  $v3=$_POST['txtv3'];	  $v4=$_POST['txtv4'];	  
	  $A = 8.0;	  $B = 12.0;	  $C = 0.15;	  $D = 0.06;		  $total=$v1*$A + $v2*$B + $v3*$C + $v4*$D ;	  echo $total;	  
	  	   }  ?> <br>
      <br>
      <center>
        <h3> Análise de perdas </h3>
        <img src="https://d168rbuicf8uyi.cloudfront.net/wp-content/uploads/2019/03/19152726/atrair-prosperidade-1024x692.jpg"

          alt="Trulli" height="300" width="400"> </center>
      <br>
	  <br>
	  <br>
	  <br>
     
      <center> <text> <b><span style="color: #13265f;">Desenvolvido por:
              Marcelo Moura<br>
              <span style="color: #993399;"># GOAS 2020</span><br>
            </span></b></text> </center>
    </center>
  </body>
</html>
