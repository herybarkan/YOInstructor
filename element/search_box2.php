<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    
<style type="text/css">
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   
#xcari{
   width: 80%;
}
#bt_cari{
   width: 20%;
}
}

@media only screen 
   and (max-width : 1200px) {
#xcari{
   width: 100%;
}
#bt_cari{
   width: 100%;
   margin-top: 15px;
}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
</style>
<style type="text/css">
      .ui-autocomplete-row
      {
        padding:8px;
        background-color: #f4f4f4;
        border-bottom:1px solid #ccc;
        font-weight:bold;
      }
      .ui-autocomplete-row:hover
      {
        background-color: #fff;
      }
    </style>
<script type="text/javascript" src="modul/ajax_js/ajax_search2.js"></script>

<div class="edgtf-row-grid-section-wrapper " style="padding-top: 50px; padding-bottom: 10px; background-color: #fff; margin-top:50px;">
   <div class="edgtf-row-grid-section">
      <div class="vc_row wpb_row vc_row-fluid vc_custom_1534501596188">
         <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
               <div class="wpb_wrapper">
                  <div class="edgtf-listing-search-holder edgtf-custom-search-enabled edgtf-custom-category-enabled edgtf-custom-location-enabled">
                     <center>
                     <div class="edgtf-listing-search-inner" style="width: 100%;">
                        <form role="searchx" method="POST" class="edgtf-listing-search-form" action="?com=result_search">
                           
                           <!-- <div class="edgtf-ls-form-section edgtf-ls-form-custom-search"> -->
                              <div id="xcari">
                              <input type="text" id="search_data" name="search_data" value="" placeholder="Search" style="background-color: #fff; width: 100%;" onkeypress="show_src(document.getElementById('search_data').value)" onkeydown="show_src(document.getElementById('search_data').value)" onkeyup="show_src(document.getElementById('search_data').value)">
                              
                              <div id="result_src" style="margin-top:20px;"></div>
                           </div>

                           
                           <!-- <div class="edgtf-ls-form-section edgtf-ls-form-button"> -->
                              <div id="bt_cari">
                              <button type="submit" class="edgtf-btn edgtf-btn-medium edgtf-btn-solid edgtf-btn-iconx"> <i class="edgtf-icon-font-awesome fas fa-search "></i> <span class="edgtf-btn-text">Search</span></button>
                              
                           </div>
                           
                        </form>
                     </div>
                  </center>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!--<script>
  $(document).ready(function(){
      
    $('#search_data').autocomplete({
      source: "element/fetch.php",
      minLength: 1,
      select: function(event, ui)
      {
        $('#search_data').val(ui.item.value);
      }
    }).data('ui-autocomplete')._renderItem = function(ul, item){
      return $("<li class='ui-autocomplete-row'></li>")
        .data("item.autocomplete", item)
        .append(item.label)
        .appendTo(ul);
    };

  });
</script>-->