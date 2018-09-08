<?php $__env->startSection('content'); ?>


<div role="main" class="main">

	<div class="slider-container rev_slider_wrapper" style="height: 650px;">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider
		    data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
			<ul>
				<li data-transition="fade">
					<img src="<?php echo e(asset('back_image.jpeg')); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
					    class="rev-slidebg">

					<div class="tp-caption main-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="-5" data-start="1500"
					    data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
					    data-mask_in="x:0px;y:0px;">and We Do it all</div>

					<div class="tp-caption main-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="-55" data-start="500"
					    style="z-index: 5; text-transform: uppercase; font-size: 52px;" data-transform_in="y:[-300%];opacity:0;s:500;">We
						are TreekMedia</div>


				</li>

			</ul>
		</div>
	</div>
	<hr>



	<hr>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>