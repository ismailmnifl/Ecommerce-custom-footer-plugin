<?php
    global $cpyr;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    function wphw_opt(){
        $cop = $_POST['copyright'];
        $au = $_POST['author'];
        //about section
        $ab = $_POST['aboutText'];
        $ah = $_POST['Aboutheader'];
        //second list
        $flh = $_POST['Flistheader'];

        $item1 = $_POST['item1'];
        $item1url = $_POST['item1url'];

        $item2 = $_POST['item2'];
        $item2url = $_POST['item2url'];

        $item3 = $_POST['item3'];
        $item3url = $_POST['item3url'];

        $item4 = $_POST['item4'];
        $item4url = $_POST['item4url'];
        //first list
        $secondheader = $_POST['secondheader'];  
        
        $sitem1 = $_POST['sitem1'];
        $sitem1url = $_POST['sitem1url'];

        $sitem2 = $_POST['sitem2'];
        $sitem2url = $_POST['sitem2url'];

        $sitem3 = $_POST['sitem3'];
        $sitem3url = $_POST['sitem3url'];

        $sitem4 = $_POST['sitem4'];
        $sitem4url = $_POST['sitem4url'];

        //color
        $backcolor = $_POST['backcolor'];
        $textcolor = $_POST['textcolor'];
        $headercolor = $_POST['headercolor'];
        //cosial media
        //facebook
        $Facebook = $_POST['Facebook'];
        $FacebookURL = $_POST['FacebookURL'];
        if ($Facebook == "Facebook") {
          update_option( 'Facebook', "fab fa-facebook-f");
          update_option( 'styleIcone1', "display:inline-block;");
          update_option( 'IconURL1',$FacebookURL);
        }else {
          update_option( 'Facebook', "");
          update_option( 'styleIcone1', "display:none;");
        }
        //Twitter
        $Twitter = $_POST['Twitter'];
        $TwitterURL = $_POST['TwitterURL'];
        if ($Twitter == "Twitter") {
          update_option( 'Twitter', "fab fa-twitter");
          update_option( 'styleIcone2', "display:inline-block;");
          update_option( 'IconURL2',$TwitterURL);
        }else {
          update_option( 'Twitter', "");
          update_option( 'styleIcone2', "display:none;");

        }
        //Twitter
        $Github = $_POST['Github'];
        $GithubURL = $_POST['GithubURL'];
        if ($Github == "Github") {
          update_option( 'Github', "fab fa-github");
          update_option( 'styleIcone3', "display:inline-block;");
          update_option( 'IconURL3',$GithubURL);
        }else {
          update_option( 'Github', "");
          update_option( 'styleIcone3', "display:none;");
        }
        
         //Linkedin
         $Linkedin = $_POST['Linkedin'];
         $LinkedinURL = $_POST['LinkedinURL'];
         if ($Linkedin == "Linkedin") {
           update_option( 'Linkedin', "fab fa-linkedin-in");
           update_option( 'styleIcone4', "display:inline-block;");
           update_option( 'IconURL4',$LinkedinURL);
         }else {
           update_option( 'Linkedin', "");
           update_option( 'styleIcone4', "display:none;");
         }

           //Instagram
           $Instagram = $_POST['Instagram'];
           $InstagramURL = $_POST['InstagramURL'];
           if ($Instagram == "Instagram") {
             update_option( 'Instagram', "fab fa-instagram");
             update_option( 'styleIcone5', "display:inline-block;");
             update_option( 'IconURL5',$InstagramURL);
           }else {
             update_option( 'Instagram', "");
             update_option( 'styleIcone5', "display:none;");
           }
             //Instagram
             $Gmail = $_POST['Gmail'];
             $GmailURL = $_POST['GmailURL'];
             if ($Gmail == "Gmail") {
               update_option( 'Gmail', "fab fa-google");
               update_option( 'styleIcone6', "display:inline-block;");
               update_option( 'IconURL6',$GmailURL);
             }else {
               update_option( 'Gmail', "");
               update_option( 'styleIcone6', "display:none;");
             }
 
        global  $cpyr;
        if( get_option('backcolor') != trim($backcolor)){
          $cpyr = update_option( 'backcolor', trim($backcolor));
      }
      if( get_option('textcolor') != trim($textcolor)){
        $cpyr = update_option( 'textcolor', trim($textcolor));
    }
        if( get_option('copyright') != trim($cop)){
            $cpyr = update_option( 'copyright', trim($cop));
        }
        if( get_option('author') != trim($au)){
            $cpyr = update_option( 'author', trim($au));
        }
        if( get_option('aboutText') != trim($ab)){
          $cpyr = update_option( 'aboutText', trim($ab));
        }
        if( get_option('Aboutheader') != trim($ah)){
          $cpyr = update_option( 'Aboutheader', trim($ah));
        }
        if( get_option('Flistheader') != trim($flh)){
          $cpyr = update_option( 'Flistheader', trim($flh));
        }
        if( get_option('item1') != trim($item1)){
          $cpyr = update_option( 'item1', trim($item1));
        }
        if( get_option('item1url') != trim($item1url)){
          $cpyr = update_option( 'item1url', trim($item1url));
        }
        if( get_option('item2') != trim($item2)){
          $cpyr = update_option( 'item2', trim($item2));
        }
        if( get_option('item2url') != trim($item2url)){
          $cpyr = update_option( 'item2url', trim($item2url));
        }
        if( get_option('item3') != trim($item3)){
          $cpyr = update_option( 'item3', trim($item3));
        }
        if( get_option('item3url') != trim($item3url)){
          $cpyr = update_option( 'item3url', trim($item3url));
        }
        if( get_option('item4') != trim($item4)){
          $cpyr = update_option( 'item4', trim($item4));
        }
        if( get_option('item4url') != trim($item4url)){
          $cpyr = update_option( 'item4url', trim($item4url));
        }
        if( get_option('secondheader') != trim($secondheader)){
          $cpyr = update_option( 'secondheader', trim($secondheader));
        }
        if( get_option('headercolor') != trim($headercolor)){
          $cpyr = update_option( 'headercolor', trim($headercolor));
        }

        if( get_option('sitem1') != trim($sitem1)){
          $cpyr = update_option( 'sitem1', trim($sitem1));
        }
        if( get_option('sitem1url') != trim($sitem1url)){
          $cpyr = update_option( 'sitem1url', trim($sitem1url));
        }
        if( get_option('sitem2') != trim($sitem2)){
          $cpyr = update_option( 'sitem2', trim($sitem2));
        }
        if( get_option('sitem2url') != trim($sitem2url)){
          $cpyr = update_option( 'sitem2url', trim($sitem2url));
        }
        if( get_option('sitem3') != trim($sitem3)){
          $cpyr = update_option( 'sitem3', trim($sitem3));
        }
        if( get_option('sitem3url') != trim($sitem3url)){
          $cpyr = update_option( 'sitem3url', trim($sitem3url));
        }
        if( get_option('sitem4') != trim($sitem4)){
          $cpyr = update_option( 'sitem4', trim($sitem4));
        }
        if( get_option('sitem4url') != trim($sitem4url)){
          $cpyr = update_option( 'sitem4url', trim($sitem4url));
        }


        
    }
?>
<style>
 table {
   margin-left : 30px;
 }
</style>

<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Settings</h2>
  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter footer text and click on save button.</strong></h3>
      <form method="post" action="">
        <table class="form-table">
        <tr>
            <th scope="row"><h2>Bottom footer</h2></th>
        </tr>
          <tr>
            <th scope="row">Copyright</th>
            <td><input type="text" name="copyright" value="<?php echo get_option('copyright');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Author</th>
            <td><input type="text" name="author" value="<?php echo get_option('author');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row"><h2>About section</h2></th>
        </tr>
          <tr>
            <th scope="row">About header</th>
            <td><input type="text" name="Aboutheader" value="<?php echo get_option('Aboutheader');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">About text</th>
            <td><input type="text" name="aboutText" value="<?php echo get_option('aboutText');?>" style="width:350px;" ></td>
          </tr>
          <tr>
          <tr>
            <th scope="row"><h2>Lists section</h2></th>
        </tr>
            <th scope="row">first list header</th>
            <td><input type="text" name="Flistheader" value="<?php echo get_option('Flistheader');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">item 1</th>
            <td><input type="text" name="item1" value="<?php echo get_option('item1');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="item1url" value="<?php echo get_option('item1url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">item 2</th>
            <td><input type="text" name="item2" value="<?php echo get_option('item2');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="item2url" value="<?php echo get_option('item2url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">item 3</th>
            <td><input type="text" name="item3" value="<?php echo get_option('item3');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="item3url" value="<?php echo get_option('item3url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">item 4</th>
            <td><input type="text" name="item4" value="<?php echo get_option('item4');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="item4url" value="<?php echo get_option('item4url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">second list header</th>
            <td><input type="text" name="secondheader" value="<?php echo get_option('secondheader');?>" style="width:350px;" ></td>
          </tr>

          <tr>
            <th scope="row">item 1</th>
            <td><input type="text" name="sitem1" value="<?php echo get_option('sitem1');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="sitem1url" value="<?php echo get_option('sitem1url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">item 2</th>
            <td><input type="text" name="sitem2" value="<?php echo get_option('sitem2');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="sitem2url" value="<?php echo get_option('sitem2url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">item 3</th>
            <td><input type="text" name="sitem3" value="<?php echo get_option('sitem3');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="sitem3url" value="<?php echo get_option('sitem3url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">item 4</th>
            <td><input type="text" name="sitem4" value="<?php echo get_option('sitem4');?>" style="width:350px;" ></td>
            <th scope="row">Link</th>
            <td><input type="text" name="sitem4url" value="<?php echo get_option('sitem4url');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row"><h2>Styles section</h2></th>
          </tr>
          <tr>
            <th scope="row">select footer background color</th>
            <td><input type="color" name="backcolor" value="<?php echo get_option('backcolor');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">select headers color</th>
            <td><input type="color" name="textcolor" value="<?php echo get_option('textcolor');?>" style="width:350px;"></td>
          </tr>

          <tr>
            <th scope="row">select text color</th>
            <td><input type="color" name="headercolor" value="<?php echo get_option('headercolor');?>" style="width:350px;"></td>
          </tr>
          <tr>
            <th scope="row"><h2>social media section</h2></th>
          </tr>
          <tr>
            <th scope="row">Facebook</th>
            <td><input type="checkbox" name="Facebook" value="Facebook" style="width:15px;height:15px;"></td>
            <th scope="row">Link</th>
            <td><input type="text" name="FacebookURL" value="<?php echo get_option('FacebookURL');?>" style="width:350px;" ></td>
          </tr>

          <tr>
            <th scope="row">Twitter</th>
            <td><input type="checkbox" name="Twitter" value="Twitter" style="width:15px;height:15px;"></td>
            <th scope="row">Link</th>
            <td><input type="text" name="TwitterURL" value="<?php echo get_option('TwitterURL');?>" style="width:350px;" ></td>
          </tr>

          <tr>
            <th scope="row">Github</th>
            <td><input type="checkbox" name="Github" value="Github" style="width:15px;height:15px;"></td>
            <th scope="row">Link</th>
            <td><input type="text" name="GithubURL" value="<?php echo get_option('GithubURL');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">Linkedin</th>
            <td><input type="checkbox" name="Linkedin" value="Linkedin" style="width:15px;height:15px;"></td>
            <th scope="row">Link</th>
            <td><input type="text" name="LinkedinURL" value="<?php echo get_option('LinkedinURL');?>" style="width:350px;" ></td>
          </tr>

          <tr>
            <th scope="row">Instagram</th>
            <td><input type="checkbox" name="Instagram" value="Instagram" style="width:15px;height:15px;"></td>
            <th scope="row">Link</th>
            <td><input type="text" name="InstagramURL" value="<?php echo get_option('InstagramURL');?>" style="width:350px;" ></td>
          </tr>

          <tr>
            <th scope="row">Gmail</th>
            <td><input type="checkbox" name="Gmail" value="Gmail" style="width:15px;height:15px;"></td>
            <th scope="row">Link</th>
            <td><input type="text" name="GmailURL" value="<?php echo get_option('GmailURL');?>" style="width:350px;" ></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
<input type="submit" name="wphw_submit" value="Save changes" class="button-primary"/>
</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
