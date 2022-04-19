<a
href={{ $attributes['href'] }}
{{ $attributes->merge(['class' => 'btnEffect tracking-widest border px-8 py-2 text-base bg-devarana-pearl text-devarana-graph fill-devarana-pink hover:fill-devarana-pearl font-playfair hover:text-devarana-pearl items-center overflow-hidden flex relative transition-all duration-500']) }}
>

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 924.3 1037.4" style="enable-background:new 0 0 924.3 1037.4;" xml:space="preserve" width="30px" class="mr-2">
<g>
	<g>
		<g>
			<g>
				<g>
					<g>
						<path class="st0" d="M830.7,354.8c-1.1-0.3-2.1-1-2.5-2.1c-27.1-68.4-92.5-108.2-199.6-67.6c-2.2,0.8-4.6-0.8-4.6-3.2
							c0.6-82.2-49.6-186-59-240.5c-0.6-3.4-5.4-3.9-6.6-0.6c-16.7,45.6-28.2,75.3-33.2,117.8c-4.8,40.1,8.6,45-4.3,77.2
							c-27,70.8,21.7,103.2-8.3,109.4c-10.6,2-50.3-60.3-147.8-90.3c-0.2-0.1-0.5-0.2-0.7-0.3c-76.8-43.2-94.1-82.8-149-108.8
							C148.3,114,91.7,61.3,49.8,9c-4.2-5.3-12.5-0.5-10.1,5.8C46.8,33,158.5,284,179.5,326c39.2,78.5,38.4,71.7,73.4,119.7
							c41.4,56.7,91.6,100.6,95.7,103.1c1.4,0.9,2,2.7,1.3,4.3C335.8,585.3,323,603,309,635.9c-25.9,60.9-30.7,95-52,133.9
							c-44.6,83.1-134.5,179.3-219.5,253c-3.1,2.7,0.3,7.5,3.9,5.6C218.7,932.8,241.5,857.9,280.5,846c2-0.6,4.5,0.7,4.3,2.8
							c-2,28.2-4.4,42.1-13.1,65c-1.4,3.8,2.7,6.9,5.5,4c46.3-50.1,106-127.3,155.1-160.8c31.9-21.8,56.8-23.7,90.2-38.3
							c194.1-84.5,122-175.2,211.2-265.2c34.5-34.8,42.7-28.3,91.2-56.6c0.5-0.3,1.1-0.4,1.7-0.5c15.4-2.7,54.3-9.8,92.6-16.8
							C919.2,379.5,865.8,365,830.7,354.8z"/>
					</g>
				</g>
			</g>
		</g>
	</g>
</g>
</svg>
{{ $slot }}
</a>


<style>
.btnEffect {
  z-index: 1;
}

.btnEffect::after {
  content: "";
  background: #d64767; /* color de fondo hover */
  position: absolute;
  z-index: -1;
  padding: 16px 20px;
  display: block;
  top: 0;
  bottom: 0;
  left: -100%;
  right: 100%;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}
.btnEffect:hover::after {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}
</style>