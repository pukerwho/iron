<section id="welcome">
	<div class="black-cover p-absolute h-100vh w-100 top-0 left-0"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="mb-5">Арматура 10 за 8.33 грн/м</h1>
				<div class="lead mb-5">И другой металлопрокат по самым низким ценам в Харькове.
					<span class="p-relative inline-block">
						<span>Дешевле ты не найдешь.</span>
						<span class="svg-underline"><svg viewBox="0 0 92 5" preserveAspectRatio="none" focusable="false" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M81.863 3.149c.924.04.935 1.473.005 1.44-5.877-.213-11.757-.396-17.636-.543a1197.883 1197.883 0 0 0-62.48.07c-.937.026-.938-1.43-.005-1.457a1197.297 1197.297 0 0 1 48.817-.357c10.436.137 20.87.403 31.299.847zM90.766.405c.868.02.876 1.367.005 1.354-6.632-.1-13.265-.186-19.897-.256a2549.99 2549.99 0 0 0-35.023-.15c-11.763.038-23.525.166-35.286.382C-.187 1.749-.188.58.56.563a2308.829 2308.829 0 0 1 54.92-.56c11.763.02 23.525.139 35.286.402z"></path></svg></span>
					</span>
				</div>
				<div class="buybutton px-5 mt-5 pointer" data-toggle="modal" data-target="#nowModal">Заказать сейчас</div>
			</div>
		</div>
	</div>
	<div class="arrow-down">
		<svg class="t-cover__arrow-svg" style="fill:#ffffff;" x="0px" y="0px" width="38.417px" height="18.592px" viewBox="0 0 38.417 18.592"><g><path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"></path></g></svg>
	</div>
</section>

<!-- now Modal -->
<div class="modal fade" id="nowModal" tabindex="-1" role="dialog" aria-labelledby="nowModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заявка</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="52" title="Заказать сейчас"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- просчет Modal -->
<div class="modal fade" id="calcModal" tabindex="-1" role="dialog" aria-labelledby="calcModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заказать просчет</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="53" title="Заказать просчет"]'); ?>
      </div>
    </div>
  </div>
</div>