<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/cart.css">
        
        <link rel="stylesheet" href="fonts/fonts/css/all.css"> 
        <link rel="icon" href="images/harmony-logo.jpg">
    </head>
    <body>
     

<div class="container">
    
    
    <div class="cart transition is-open">
            
      <div class="table">
        
        <div class="layout-inline row th">
          <div class="col col-pro">Product</div>
          <div class="col col-price align-center "> 
            Price
          </div>
          <div class="col col-qty align-center">QTY</div>
          <div class="col">VAT</div>
          <div class="col">Total</div>
        </div>
        
        <div class="layout-inline row">
          
          <div class="col col-pro layout-inline">
              <img src="images/rooms/01-master-room/02-farmhouse.jpg">
            <p> Farmhouse Master room </p>
          </div>
          
          <div class="col col-price col-numeric align-center ">
            <p> 17500 </p>
          </div>
  
          <div class="col col-qty layout-inline">
            <a href="#" class="qty qty-minus">-</a>
              <input type="numeric" value="1" />
            <a href="#" class="qty qty-plus">+</a>
          </div>
          
          <div class="col col-vat col-numeric">
            <p> 100 </p>
          </div>
          <div class="col col-total col-numeric">               
              <p> 17600 </p>
          </div>
        </div>
        
        <div class="layout-inline row row-bg2">
  
          <div class="col col-pro layout-inline">
              <img src="images/rooms/03-living-room/04-parma.jpg">
            <p> Parma Living room </p>
          </div>
          
          <div class="col col-price col-numeric align-center ">
            <p> 18500 </p>
          </div>
  
          <div class="col col-qty  layout-inline">
            <a href="#" class="qty qty-minus ">-</a>
              <input type="numeric" value="1" />
            <a href="#" class="qty qty-plus">+</a>
          </div>
          
          <div class="col col-vat col-numeric">
            <p> 100 </p>
          </div>
          <div class="col col-total col-numeric">
            <p> 18600 </p>
          </div>      
        
        </div>
        
         <div class="layout-inline row">
          
          <div class="col col-pro layout-inline">
              <img src="images/rooms/05-kitchen/08-calm.jpg">
            <p> Calm Kitchen </p>
          </div>
          
          <div class="col col-price col-numeric align-center ">
            <p> 20500 </p>
          </div>
  
          <div class="col col-qty layout-inline">
            <a href="#" class="qty qty-minus">-</a>
              <input type="numeric" value="1" />
            <a href="#" class="qty qty-plus">+</a>
          </div>
          
          <div class="col col-vat col-numeric">
            <p> 100 </p>          
          </div>
           <div class="col col-total col-numeric">  
             <p> 20600 </p>
           </div>         
        </div>
    
         <div class="tf">
           <div class="row layout-inline">
             <div class="col">
               <p>VAT</p>
             </div>
             <div class="col"></div>
           </div>
           <div class="row layout-inline">
             <div class="col">
               <p>Shipping</p>
             </div>
             <div class="col"></div>
           </div>
            <div class="row layout-inline">
             <div class="col">
               <p>Total</p>
             </div>
             <div class="col"></div>
           </div>
         </div>         
    </div>
          
  </div>
    
  
  
  
  <script src="js/cart.js"></script>
    </body>
</html>