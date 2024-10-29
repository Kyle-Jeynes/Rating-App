<?php
/* Smarty version 5.4.1, created on 2024-10-28 22:49:07
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672014e371a204_12388055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c748943df8ebd2725486ed9544329fe23b7e4af9' => 
    array (
      0 => 'index.tpl',
      1 => 1730155744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672014e371a204_12388055 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/app/views';
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rating</title>

        <link rel="stylesheet" href="/app.css" />
    </head>
    <body>
        <div class="container-fluid index-bg">
            <div class="container vh-100 d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    Botterill & Bartlett’s 1-Day Business Workshop
                                </div>
                                <hr />
                                <div class="card-text">
                                    <p class="text-center">We’re all ears! How was it for you? Rate us from 1 (awful) to 5 (awesome).</p>
                                    <hr />
                                    <form id="rating-form">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input name="fullName" type="text" class="form-control" id="fullName" placeholder="Enter Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="rating">Star Review</label>
                                        </div>
                                        <fieldset id="rating" class="rating">
                                            <input type="radio" id="star5" name="rating" value="5" required />
                                            <label for="star5">5 stars</label>
                                            <input type="radio" id="star4" name="rating" value="4" required />
                                            <label for="star4">4 stars</label>
                                            <input type="radio" id="star3" name="rating" value="3" required />
                                            <label for="star3">3 stars</label>
                                            <input type="radio" id="star2" name="rating" value="2" required />
                                            <label for="star2">2 stars</label>
                                            <input type="radio" id="star1" name="rating" value="1" required />
                                            <label for="star1">1 star</label>
                                        </fieldset>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/app.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
