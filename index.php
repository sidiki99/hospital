   
<?php
// index.php
include 'header.php'; // Includes the content of header.php
?>
<?php 
$carousel = [
  [
    "btn_link" => "Book Now",
    "img_link" => "images/WhatsApp Image 2025-09-01 at 21.40.08_9c3e4cbf.jpg",
    "text" => "Some representative content",
    "title" => "Developers",
  ],
  [
    "btn_link" => "Book Now",
    "img_link" => "images/people.webp",
    "text" => "Some representative content",
    "title" => "Marketers",
  ],
  [
    "btn_link" => "Book Now",
    "img_link" => "images/designer.webp",
    "text" => "Some representative content",
    "title" => "Designers",
  ],
]; 
?>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xsm-12 text">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">

        <?php foreach ($carousel as $index => $carousels):
         if($index == 0){
            $active_link ='active';}
        
          else {
            $active_link ='';

          }?>
          <div class="carousel-item c-item <?= $active_link  ?>">
            <img src="<?= $carousels['img_link'] ?>" class="c-img d-block w-100" alt="<?= $carousels['title'] ?>">

            <div class="carousel-caption top-0 mt-4">
              <p class="mt-5 fs-1 text-uppercase"><?= $carousels['text'] ?></p>
              <h1 class="display-1 fw-bolder text-capitalize"><?= $carousels['title'] ?></h1>
              <button class="btn bg-custom-skky px-4 py-2 fs-5 mt-4"><?= $carousels['btn_link'] ?></button>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
      
    </div>
  </div>
</div>

    <!-- Bootstrap cards -->
     <?php 
     $services_title ="What Services We Offer?";
       
 $cards = [
  [
    "btn_link" => "Book Now",
    "img_link" => "images/WhatsApp Image 2025-09-01 at 21.40.08_9c3e4cbf.jpg",
    "text" => "Some quick example text to build on the card title and make up the 
    bulk of the card’s content.",
    "title" => "Developers",
  ],
  [
    "btn_link" => "Book Now",
    "img_link" => "images/people.webp",
    "text" => "Some quick example text to build on the card title and make up the 
    bulk of the card’s content.",
    "title" => "Marketers",
  ],
  [
    "btn_link" => "Book Now",
    "img_link" => "images/designer.webp",
    "text" => "Some quick example text to build on the card title and make up the 
    bulk of the card’s content.",
    "title" => "Designers",
  ],
]; 
?>
<div class="row bg-custom-light-sky pt-2 pb-5">
  <div class="col-lg-12 p-3">
    <h1 class="custom-blue fw-bold mt-3 mb-3 d-flex justify-content-center">
      <?= $services_title ?>
    </h1>
  </div>

  <div class="row d-flex justify-content-evenly">
    <?php foreach ($cards as $index => $card): ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xsm-12 card card-width">
        <img src="<?= $card['img_link'] ?>" class="card-img-top card-img mt-3" alt="<?= $card['title'] ?>">
        <div class="card-body">
          <h5 class="card-title text-center"><?= $card['title'] ?></h5>
          <p class="card-text text-center"><?= $card['text'] ?></p>
          <a href="#" class="btn bg-custom-skky d-flex justify-content-center">
            <?= $card['btn_link'] ?>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


   <!-- WHY Choose us section -->
    <?php
    $us_section_title ="Why Choose Us";
    $about_title1="About Us";
    $about_title1_dis="At XYZ, we specialize in creating innovative websites and mobile applications that help businesses grow in the digital world. Our mission is simple — to blend creativity, 
          technology, and strategy into powerful solutions that deliver real results";
    $about_title2="What We Do";
    $about_li=[
      "  Custom Website Development – Responsive, fast, and user-friendly websites.   ",
      "  Mobile App Development – Scalable iOS & Android applications tailored to your needs.    ",
      "  Digital Strategy & Support – End-to-end support to help you succeed   ",
      " UI/UX Design – Modern, engaging, and intuitive user experiences.    ",
    ];
       $form_title="Add User";
       $form_input =[
        ["label"=>"Name","placeholder"=>"Enter Your Name",
        "input_type"=>"text","icon"=>"fa-user"],
        ["label"=>"Email","placeholder"=>"123@gmail.com",
        "input_type"=>"text","icon"=>"fa-envelope"],
        ["label"=>"Phone","placeholder"=>"Phone",
        "input_type"=>"tel","icon"=>"fa-phone"],
        ["label"=>"Message","placeholder"=>"Leave a message",
        "input_type"=>"textarea","icon"=>"fa-message"],
       ];
       $form_btn="Submit";
    ?>
   

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xsm-12 ">
           <h2 class=" mt-3 fs-1 fw-bold  custom-blue d-flex  justify-content-center "> 
           <?=   $us_section_title ?>
        </h2>

        </div>
      <div class="row d-flex  justify-content-center   bg-custom-light-sky">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xsm-12 p-4">
        <h2 class=" mt-3  fw-bold d-flex  justify-content-start "> 
         <?= $about_title1 ?>
        </h2>
        <p>
          <?= $about_title1_dis ?>
        </p>
          <h2 class=" mt-3  fw-bold d-flex  justify-content-start "> 
         <?= $about_title2 ?>
        </h2>
       <ul>
          <?php 
          foreach($about_li as $about_lis):?>
        <li>
            <?= $about_lis
              ?> 
          </li>
        <?php endforeach; ?>
       </ul>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xsm-12 ">
          <h2 class=" mt-3  fw-bold d-flex  justify-content-center "> 
            <?= $form_title ?>
           </h2>
            <?php foreach ($form_input as $index => $form_inputs):?>
           <div class="mb-3">      
            
           <div class=" d-flex justify-content-between">
           <label for="exampleFormControlInput1" class="form-label"><?= $form_inputs['label']?></label>
           
           <i class="fa-solid <?= $form_inputs['icon']?> justify-content-evenly"></i> 
           </div>
           
              <input type="<?= $form_inputs['input_type']?>" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="<?= $form_inputs['placeholder']?>">
       </div>
       <?php endforeach; ?>
        
           
<!--               
          <div class="mb-3">
              <div class=" d-flex justify-content-between">
             <label for="exampleFormControlInput1" class="form-label">Email address</label>
             <i class="fa-solid fa-message"></i>
             </div>

               <textarea class="form-control" id="exampleFormControlTexarea1" rows="3"></textarea>
          </div> -->


<div class="col-auto mt-3">
    <button type="submit" class="btn bg-custom-skky w-100 mb-3"><?=   $form_btn ?></button>
  </div>
      </div>
         </div>

         
    <!--  Services -->
     <?php
     $pro_sec_title="How We Complete Projects";
     $cards_project = [
  [
    "btn_link" => "Visit Website",
    "icon_link" => " fa-brands fa-wordpress fs-1",
    "text" => "We craft modern, responsive, and user-friendly websites that not only look great but also perform flawlessly. From business websites to
                 e-commerce solutions, our team builds secure, scalable, and SEO-friendly platforms tailored to your needs
    bulk of the card’s content.",
    "title" => "Web Development",
  ],
   [
    "btn_link" => "Visit Website",
    "icon_link" => " fa-solid fa-mobile fs-1",
    "text" => "Our mobile app development services br
                ing your ideas to life with powerful, intuitive, and cross-platform solutions. Whether Android, iOS, or hybrid apps, we deliver smooth performance and engaging interfaces.
              Reliable, and aligned with your business goals.",
              
    "title" => "App Development",
  ],
    [
    "btn_link" => "Visit Website",
    "icon_link" => " fa-solid fa-chart-simple fs-1",
    "text" => "Grow your business with result-driven digital marketing strategies. We offer SEO, social media campaigns, content marketing, and paid ads to increase visibility and engagement.
                Our goal is to connect you with the right audience, boost conversions, and build a strong",
    "title" => "Digital Marketing",
  ],
]; 
     ?>

  
      <div class="row  pt-2 pb-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xsm-12 p-3 ">
           <h1 class="custom-blue fw-bold  mt-3 mb-3  d-flex justify-content-center  "> 
            <?= $pro_sec_title ?>
          </h1></div>
          <div class="row d-flex  justify-content-evenly">
            <?php foreach($cards_project as $index =>$cards_projects):?>
             <div class="col-lg-3 col-md-3 col-sm-3 col-xsm-3 bg-custom-light-sky  rounded-2 p-4 border border-2">
              <div class="d-flex justify-content-center">
              <i class=" <?= $cards_projects['icon_link']?>" class="fs-2"> </i></div>
              <h2 class=" mt-3  fw-bold d-flex  justify-content-center ">  <?= $cards_projects['title']?> </h2>
              <p class="text-center ">
                 <?= $cards_projects['text']?>
              </p>
              <a href="http://127.0.0.1:5500/index.html" class="btn  bg-custom-skky  d-flex  justify-content-center"> <?= $cards_projects['btn_link']?></a>
             </div>
             <?php endforeach; ?>            
          
          </div></div>
          
    
         <?php
         include "footer.php";
         ?>

        

 </div>
   
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
     <script src="./assets/js/script.js"></script>
     <script>
       
     </script>
  </body>
</html>