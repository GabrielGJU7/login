<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Registrar Alumnos</title>

 
</head>
<body>
<?php

include "savealumno.php";

?>
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="" method="POST">
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="fName"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Nombres(s)
                    </label>
                    <input
                    type="text"
                    name="name"
                    id="fName"
                    placeholder="Nombre(s)..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="lName"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Apellido
                    </label>
                    <input
                    type="text"
                    name="apellido"
                    id="lName"
                    placeholder="Apellido..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                </div>
            </div>
            <div class="mb-5">
                <label
                for="guest"
                class="mb-3 block text-base font-medium text-[#07074D]"
                >
                CURP
                </label>
                <input
                type="text"
                name="curp"
                id="guest"
                placeholder="CURP..."
                min="0"
                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md text-transform: uppercase"
                />
            </div>

            <div class="mb-5">
                <label
                for="guest"
                class="mb-3 block text-base font-medium text-[#07074D]"
                >
                Matricula
                </label>
                <input
                type="text"
                name="code"
                id="guest"
                placeholder="Matricula..."
                min="0"
                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md text-transform: uppercase"
                />
            </div>

            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="date"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    Titulo
                    </label>
                    <input
                    type="text"
                    name="titulo"
                    placeholder="Titulo..."
                    id="date"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label
                    for="time"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                    CTC
                    </label>
                    <input
                    type="text"
                    name="ctc"
                    placeholder="Titulo..."
                    id="time"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                </div>
            </div>

            

            <div>
                <button
                type="submit"
                class="hover:shadow-form rounded-md bg-[#3B83BD] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                name="save"
                value="guardar"
                >
                Guardar
                </button>
            </div>
            </form>
        </div>
        </div>
</body>
</html>