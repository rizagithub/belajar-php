<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Drama | List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Set fixed height for card image */
        .card-img-top {
            height: 225px; /* You can adjust this value as needed */
            object-fit: cover; /* Maintain aspect ratio */
        }

        /* Set fixed width for card */
        .card {
            width: 100%; /* Ensure cards fill the available space */
        }
    </style>
</head>
<body>
    
<?php
// Array Product
$products = [
    [
        'id' => 1,
        'title' => 'While You Sleeping',
        'year' => 2017,
        'description' => 'Lorem',
        'image' => 'product1.jpg',
    ],
    [
        'id' => 2,
        'title' => 'Reborn Rich',
        'year' => 2016,
        'description' => 'Lorem',
        'image' => 'product2.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Queen Of Tears',
        'year' => 2024,
        'description' => 'Lorem',
        'image' => 'product3.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Queen Of Tears',
        'year' => 2024,
        'description' => 'Lorem',
        'image' => 'product3.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Queen Of Tears',
        'year' => 2024,
        'description' => 'Lorem',
        'image' => 'product3.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Queen Of Tears',
        'year' => 2024,
        'description' => 'Lorem',
        'image' => 'product3.jpg',
    ],
];

?>

  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white fw-bold">My Drama</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Recently Add</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Bookmark</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2 bi bi-arrow-down-circle-fill"></button>
          <a href="./login.php"> <button type="button" class="btn btn-danger">Logout</button></a> 
        </div>
      </div>
    </div>
  </header>
  <div class="container mt-4">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['title']; ?>">
                        <div class="card-body">
                            <h4 class="fw-bold"><?php echo $product['title']; ?> - <span class="fw-normal"><?php echo $product['year']; ?></span></h4>
                            <p class="card-text"><?php echo $product['description']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Watch Now</button>
                                    <span style="margin: 0 5px;"></span> 
                                    <button type="button" class="btn btn-sm btn-outline-success">Download</button>
                                </div>
                                <medium><i class="bi bi-bookmark-plus"></i></medium>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>