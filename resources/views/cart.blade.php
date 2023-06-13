<style>
/*
Author: Michiel de Graaf
Title: Workbench, Shopping cart
*/

*{
   margin:0;
   padding:0;
}
body{
   font:13px/18px Helvetica Neue,Helvetica,Arial,sans-serif;
   text-align:baseline;
   background:#ede9e5;
}
   img{
      border:0;
   }
   ::-moz-selection{
      color:#fff;
      background:#00a2ff;
      text-shadow:0 1px rgba(0,0,0,0.2);
   }
   ::selection{
      color:#fff;
      background:#00a2ff;
      text-shadow:0 1px rgba(0,0,0,0.2);
   }
   header,
   nav,
   section,
   details,
   summary,
   article,
   footer{
      display:block;
   }
   a:hover{
      text-decoration:none;
   }

/* Content */
#content{
   margin:0 auto;
   padding-bottom:50px;
   width:280px;
}
   .shoppingCart{
      position:relative;
      margin-top:40px;
      overflow:hidden;
      color:#495860;
      color:hsla(201,14%,33%,0.8);
      -webkit-border-radius:4px 4px 0 0;
         -moz-border-radius:4px 4px 0 0;
              border-radius:4px 4px 0 0;
      -webkit-box-shadow:0 2px 3px 1px rgba(0,0,0,0);
         -moz-box-shadow:0 2px 3px 1px rgba(0,0,0,0);
              box-shadow:0 2px 3px 1px rgba(0,0,0,0);
      -webkit-transition:all 0.4s;
         -moz-transition:all 0.4s;
           -o-transition:all 0.4s;
              transition:all 0.4s;
   }
      .shoppingCart:hover{
         color:#495860;
         -webkit-box-shadow:0 2px 4px 1px rgba(0,0,0,0.1);
            -moz-box-shadow:0 2px 4px 1px rgba(0,0,0,0.1);
                 box-shadow:0 2px 4px 1px rgba(0,0,0,0.1);
      }
      .shoppingCart summary{
         padding:12px 16px 14px 16px;
         overflow:hidden;
         background:#222;
         background:-webkit-gradient(linear,left top,left bottom,color-stop(.01, #4ca9e2),color-stop(1, #1d7cb7));
         background: -webkit-linear-gradient(top,#4ca9e2 1%,#1d7cb7 100%);
         background: -moz-linear-gradient(top,#4ca9e2 1%,#1d7cb7 100%);
         background: -o-linear-gradient(top,#4ca9e2 1%,#1d7cb7 100%);
         background: linear-gradient(top,#4ca9e2 1%,#1d7cb7 100%);
         -webkit-border-radius:4px 4px 0 0;
            -moz-border-radius:4px 4px 0 0;
                 border-radius:4px 4px 0 0;
         -webkit-box-shadow:inset 0 1px 0 #72b3d3, inset 0 -1px 0 #155f8e;
            -moz-box-shadow:inset 0 1px 0 #72b3d3, inset 0 -1px 0 #155f8e;
                 box-shadow:inset 0 1px 0 #72b3d3, inset 0 -1px 0 #155f8e;
      }
         .shoppingCart h4{
            float:left;
            color:#d4f1ff;
            text-shadow:0 1px 0 rgba(0,0,0,0.4);
         }
            .shoppingCart:hover h4{
               color:#fff;
            }
         .arrow{
            float:right;
            width:0;
            height:0;
            margin-top:7px;
            border-right:4px solid transparent;
            border-bottom:4px solid hsla(200,17%,93%,0.5);
            border-left:4px solid transparent;
            -webkit-transition:all 0.5s;
               -moz-transition:all 0.5s;
                 -o-transition:all 0.5s;
                    transition:all 0.5s;
         }
            .shoppingCart:hover .arrow{
               border-bottom-color:hsla(200,17%,93%,1);
               -webkit-transform:rotate(-180deg);
                  -moz-transform:rotate(-180deg);
                    -o-transform:rotate(-180deg);
                       transform:rotate(-180deg);
            }
      .shoppingCart ul{
         list-style:none;
         position:relative;
         display:block;
      }
         .shoppingCart li{
            padding:0 15px;
            overflow:hidden;
            height:0px;
            background:#fff;
            -webkit-transition:all 0.3s;
               -moz-transition:all 0.3s;
                 -o-transition:all 0.3s;
                    transition:all 0.3s;
         }
            .shoppingCart:hover li{
               height:auto;
               padding:10px 15px;
               border-bottom:1px solid rgba(0,0,0,0.1);
               -webkit-box-shadow:inset 0 1px 0 #fff;
                  -moz-box-shadow:inset 0 1px 0 #fff;
                       box-shadow:inset 0 1px 0 #fff;
            }
            .shoppingCart:hover li:hover{
               text-shadow:0 -1px #fff;
               -webkit-box-shadow:inset 0 15px 20px #eee;
                  -moz-box-shadow:inset 0 15px 20px #eee;
                       box-shadow:inset 0 15px 20px #eee;
            }
            .shoppingCart li a{
               color:#495860;
               text-decoration:none;
               border-color:#666;
               border-bottom:1px dotted rgba(0,0,0,0.6);
            }
               .shoppingCart li a:hover{
                  border:0;
               }
            .shoppingCart li span{
               display:block;
               float:left;
            }
            .shoppingCart li strong{
               display:block;
               float:right;
            }
      .shoppingCart p{
         padding:12px 16px 14px 16px;
         overflow:hidden;
         background:#fff;
         -webkit-transition:background 0.2s;
            -moz-transition:background 0.2s;
              -o-transition:background 0.2s;
                 transition:background 0.2s;
      }
         .shoppingCart:hover p{
            text-shadow:0 -1px #fff;
            background:#eee;
         }
         .shoppingCart p span{
            display:block;
         }
            .shoppingCart p span:first-child{
               float:left;
            }
               .shoppingCart:hover p span:first-child{
                  display:none;
               }
            .shoppingCart p span:last-child{
               float:right;
            }
      .checkout{
         opacity:0;
         display:block;
         position:absolute;
         color:#fff;
         text-decoration:none;
         font-weight:bold;
         text-shadow:0 1px rgba(0,0,0,0.3);
         bottom:6px;
         left:6px;
         padding:6px 14px 8px 14px;
         background:#009c58;
         background:-webkit-gradient(linear,left top,left bottom,color-stop(.2, #00cc73),color-stop(1, #009c58));
         background: -webkit-linear-gradient(top,#00cc73 20%,#009c58 100%);
         background: -moz-linear-gradient(top,#00cc73 20%,#009c58 100%);
         background: -o-linear-gradient(top,#00cc73 20%,#009c58 100%);
         background: linear-gradient(top,#00cc73 20%,#009c58 100%);
         -webkit-border-radius:4px;
            -moz-border-radius:4px;
                 border-radius:4px;
         -webkit-box-shadow:inset 0 1px 0 #00e1a2, 0 1px 0 rgba(0,0,0,0.1);
            -moz-box-shadow:inset 0 1px 0 #00e1a2, 0 1px 0 rgba(0,0,0,0.1);
                 box-shadow:inset 0 1px 0 #00e1a2, 0 1px 0 rgba(0,0,0,0.1);
         -webkit-transition:opacity 0.6s;
            -moz-transition:opacity 0.6s;
              -o-transition:opacity 0.6s;
                 transition:opacity 0.6s;
      }
         .checkout:hover{
            background:#00cc73;
            background:-webkit-gradient(linear,left top,left bottom,color-stop(.1, #00e481),color-stop(1, #009543));
            background: -webkit-linear-gradient(top,#00e481 10%,#009543 100%);
            background: -moz-linear-gradient(top,#00e481 10%,#009543 100%);
            background: -o-linear-gradient(top,#00e481 10%,#009543 100%);
            background: linear-gradient(top,#00e481 10%,#009543 100%);
         }
         .checkout:active{
            text-shadow:0 -1px rgba(0,0,0,0.3);
            background:#009c58;
            background:-webkit-gradient(linear,left top,left bottom, color-stop(.2, #009c58),color-stop(1, #00cc73));
            background: -webkit-linear-gradient(top,#009c58 20%,#00cc73 100%);
            background: -moz-linear-gradient(top,#009c58 20%,#00cc73 100%);
            background: -o-linear-gradient(top,#009c58 20%,#00cc73 100%);
            background: linear-gradient(top,#009c58 20%,#00cc73 100%);
            -webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.4);
               -moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.4);
                    box-shadow:inset 0 1px 2px rgba(0,0,0,0.4);
         }
         .shoppingCart:hover .checkout{
            opacity:1;
         }

</style>
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>
<section id="content">
      <details class="shoppingCart" open>
         <summary>
            <h4>Shopping cart</h4>
            <span class="arrow"></span>
         </summary>
         
         <ul>
            @foreach($hotels as $hotels)
           
            <li>
               <span>{{$hotels->hotel}}{{$hotels->room}}</a></span> <strong>&euro;{{$hotels->price}}</strong>
            </li>
      
            @endforeach
            @foreach($tours as $tours)
            <li>
               <span>{{$tours->name}}</a></span> <strong>&euro;{{$tours->price}}</strong>
            </li>
            @endforeach
         </ul>
         <p>
         
            <span>Products: <strong>8</strong></span> <span>Total: <strong>&euro;1500</strong></span>
         </p>
     
         <a class="checkout" href="{{route('processPaypal')}}">Checkout</a>

         
	@if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif

    
    @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif
      </details>
</section>