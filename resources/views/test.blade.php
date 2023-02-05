<form enctype="multipart/form-data" method="post" action="./uploadArbitrationImg">
       {{ csrf_field() }}


           <textarea name="contents" id="Contents" style="color:#000;width: 750px;height: 250px;"></textarea>  


           <input type="file" name="img_upload" id="img_upload" />

           <input type="submit" value="Upload" class="btn-default" />
      </form>