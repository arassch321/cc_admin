</main>
<footer>
  <h2>Fashion Design</h3>
    <h4>Berlangganan untuk mendapatkan info dari kami</h4>
    <div class="subscription">
      <form name="submit-to-google-sheet">
        <input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off" />
        <input class="btn-grad" type="submit" value="Subscribe" />
      </form>
    </div>
    <p>&#169; 2021 Fashion Design Inc.</p>
</footer>
<script src="<?= base_url ?>/dist/js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxS0HDer9ar1mba2EZhtEXX4GYfpynSxlwf8HLhs9mIReHDBaML1tmcDde36CtlX2VG/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
      })
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message));
    alert('Thanks For Subscribing!');
    form.reset();
  })
</script>

<?php
if (isset($data['script'])) {
  foreach ($data['script'] as $e => $i) {
?>
    <script src="<?= base_url; ?>/dist/js/<?= $i; ?>.js"></script>
<?php
  }
}
?>

</body>

</html>