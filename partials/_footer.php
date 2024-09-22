<style>
  .col-4 a{
    color: black;
  }
</style>

<footer>
        <div class="container">
          <div class="row">
            <div class="col-4 border"> 
             <p><a href="">Anasayfa</a></p>
              <p><a href="">Hakkımızda</a></p>
            </div>
            <div class="col-4 border"><a href="">Fayans</a></div>
            <div class="col-4 border">   <p>İletişim: <span id="copyButton" style="color: blue; text-decoration: underline; cursor: pointer;">0532 624 83 79</span></p></div>
          </div>
          <p class="d-flex justify-content-center" >Tüm haklarımız saklıdır</p>
        </div>
      </footer>

      <script>
        function copyToClipboard(text) {
            // Geçici bir textarea oluştur
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);

            // Kopyalama başarılı olduğuna dair bir bildirim (isteğe bağlı)
            alert('Numara panoya kopyalandı: ' + text);
        }

        function setupCopy() {
            const phoneNumber = '0532 624 83 79';
            const copyButton = document.getElementById('copyButton');
            copyButton.addEventListener('click', () => copyToClipboard(phoneNumber));
        }

        document.addEventListener('DOMContentLoaded', setupCopy);
    </script>