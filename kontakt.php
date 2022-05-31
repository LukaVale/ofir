
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Kontakt</title>
</head>
<body >
<?php include('nav.php') ?>
    <section >
        <div class="container-lg p-5 mt-5">
            <div class="text-center">
                <p class="lead">Ukoliko imate dodatnih pitanja, ispunite formu</p>
            </div>
            <div class="row justify-content-center my-5 ">
                <div class="col-lg-6 col-md-4">
                    <form action="kontakt.php" method="GET">
                        <label for="email" class="form-label">Email adresa:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                  </svg>
                            </span>
                            <input type="email" class="form-control" name="email" placeholder="luka@gmail.com">
                        </div>
                        <label for="name" class="form-label">Ime:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                  </svg>
                            </span>
                            <input type="text" class="form-control" name="ime" placeholder="Mario">
                        </div>
                        
                        

                        <label for="subject" class="form-label">O čemu je vaše pitanje?</label>
                        <select class="form-select" id="subject" name="subject">
                            <option value="pricing" selected> O mojem gradu</option>
                            <option value="content" > O meni </option>
                            <option value="other" >  O galeriji fotografija</option>
                        </select>
                        
                        <div class="form-floating mb-4 mt-5">
                            <textarea class="form-control" id="query" style="height: 140px;"></textarea>
                            <label for="query" style="color: black;" >Vaš upit</label>
                        </div>
                        
                        <div class="mb-4 text-center">
                            <button type="submit" class="btn btn-secondary">Pošalji</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="section sticky-bottom">
    <?php include('footer.php') ?>
    </footer>
</body>
</html>