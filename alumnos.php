<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind script Link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>
      Panel
    </title>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<section class="container mx-auto p-6 font-mono">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">Nombre</th>
            <th class="px-4 py-3">Curp</th>
            <th class="px-4 py-3">Matricula</th>
            <th class="px-4 py-3">TItulo</th>
            <th class="px-4 py-3">CTC</th>
            <th class="px-4 py-3">Acciones</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <?php

            include "model/conexion.php";

            $query = "SELECT * FROM user";
            $result_user = mysqli_query($conexion, $query);

            while ($row = mysqli_fetch_array($result_user)) { ?>

              <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                  <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold text-black"><?php echo $row['Nombres']?></p>
                    <p class="text-xs text-gray-600"><?php echo $row['Apellido']?></p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-ms font-semibold border text-transform: uppercase"><?php echo $row['curp']?></td>
              <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm text-transform: uppercase"><?php echo $row['Matricula']?></span>
              </td>
              <td class="px-4 py-3 text-sm border"><?php echo $row['titulo']?></td>
              <td class="px-4 py-3 text-sm border"><?php echo $row['ctc']?></td>
              <td class="px-4 py-3 text-xs border">
                <button class="text-xs text-sky-300 border-2 py-1 px-2 border-sky-300 p-1 mr-3 h-10 w-20">Editar</button>
              </td>
            </tr>
              
           <?php } ?> 
          
        </tbody>
      </table>
    </div>
  </div>
</section>
</body>
</html>
