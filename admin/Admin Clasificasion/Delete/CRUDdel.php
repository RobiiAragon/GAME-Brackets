<Head>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <center>
      <section class="home">
      </section>
      <div style="height: 1000px">

        <h2 class="myH2">DELETE</h2>
   <section class="secundario form">
        
           
             <form action="CRUDclassDEL.php" method="POST" enctype="multipart/form-data">

             <input type="text" name="txtcod" required pattern="[0-9]*" placeholder="ID de el clasificado:" class="entradas">
  
               <label id="update">Date update</label>

               <input type="reset" value="cancel" class="button1">
               <input type="submit" value="update" class="button2">
             </form>
             <?php
              include_once("classDEL.php");
             ?>  
        </section>
    </main>
    <br>
  </body>
</html>