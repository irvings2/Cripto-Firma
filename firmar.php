<?php
if (!empty($_GET['username'])) {
    $usuario = $_GET['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma y cifrado</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Firma y cifrado de archivo</h1>
            <form action="./firmarar.php?username=<?=$usuario?>" method="post" enctype="multipart/form-data">
                <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mensaje</label>
                      <input type="text" name="msg" id="msg" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                <div class="mb-6">
                    <label for="formFile" class="text-white mb-2 inline-block text-neutral-700 dark:text-neutral-200">Selecciona la llave pública del Destinatario</label>
                    <input name="file1" class="text-white relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="file1" required=""/>
                </div>
                <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 mt-6">Enviar</button>
            </form>
        </div>
    </section>
</body>

</html>