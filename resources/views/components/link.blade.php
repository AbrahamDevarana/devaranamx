<a id="btnEffect" 
href={{ $attributes['href'] }}
{{ $attributes->merge(['class' => 'px-8 py-2 text-base bg-devarana-pearl text-devarana-graph fill-devarana-pink hover:fill-devarana-pearl font-playfair hover:text-devarana-pearl items-center overflow-hidden flex relative transition-all duration-500']) }}
>
    <?xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 26.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve" width="30px" class="mr-2">
        <g>
            <g>
                <g>
                    <g>
                        <g>
                            <g>
                                <path class="st0" d="M830.7,377c-1.1-0.3-2.1-1-2.5-2.1c-27.1-68.4-92.5-108.2-199.6-67.6c-2.2,0.8-4.6-0.8-4.6-3.2
                                    c0.6-82.2-49.6-186-59-240.5c-0.6-3.4-5.4-3.9-6.6-0.6c-16.7,45.6-28.2,75.3-33.2,117.8c-4.8,40.1,8.6,45-4.3,77.2
                                    c-27,70.8,21.7,103.2-8.3,109.4c-10.6,2-50.3-60.3-147.8-90.3c-0.2-0.1-0.5-0.2-0.7-0.3c-76.8-43.2-94.1-82.8-149-108.8
                                    C148.3,136.2,91.7,83.5,49.8,31.2c-4.2-5.3-12.5-0.5-10.1,5.8c7.1,18.2,118.8,269.2,139.8,311.2
                                    c39.2,78.5,38.4,71.7,73.4,119.7c41.4,56.7,91.6,100.6,95.7,103.1c1.4,0.9,2,2.7,1.3,4.3c-14.1,32.2-26.9,49.9-40.9,82.8
                                    c-25.9,60.9-30.7,95-52,133.9c-44.6,83.1-134.5,179.3-219.5,253c-3.1,2.7,0.3,7.5,3.9,5.6C218.7,955,241.5,880.1,280.5,868.2
                                    c2-0.6,4.5,0.7,4.3,2.8c-2,28.2-4.4,42.1-13.1,65c-1.4,3.8,2.7,6.9,5.5,4c46.3-50.1,106-127.3,155.1-160.8
                                    c31.9-21.8,56.8-23.7,90.2-38.3c194.1-84.5,122-175.2,211.2-265.2c34.5-34.8,42.7-28.3,91.2-56.6c0.5-0.3,1.1-0.4,1.7-0.5
                                    c15.4-2.7,54.3-9.8,92.6-16.8C919.2,401.7,865.8,387.2,830.7,377z"/>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
            <path class="st1" d="M1012.1,114.1c0,36.8-28.6,67.9-65.2,67.9c-36.5,0-64.7-30.7-64.7-67.5s28.4-67.9,65-67.9
                C983.7,46.6,1012.1,77,1012.1,114.1z M1001.2,114.1c0-30.5-23.4-55.6-53.9-55.6c-30.7,0-54.1,25.5-54.1,56s23.2,55.6,53.7,55.6
                C977.6,170.1,1001.2,144.6,1001.2,114.1z M961.3,123.5l15,22.5h-12.7l-12.1-20.3h-2.9h-15.2V146h-10.9V78.6h26.1
                c16.9,0,26.3,8.4,26.3,23.1C974.9,112.3,970.1,119.9,961.3,123.5z M948.6,116.1c10,0,15.9-5.2,15.9-14.1c0-9-5.9-13.7-15.9-13.7
                h-15.2v27.9H948.6z"/>
        </g>
        </svg>
    {{ $slot }}
    </a>


<style>
#btnEffect {
  z-index: 1;
}

#btnEffect::after {
  content: "";
  background: #56739b; /* color de fondo hover */
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
#btnEffect:hover::after {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}
</style>