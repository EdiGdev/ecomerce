@props(['size' => 24, 'color' => 'gray'])
@php
    switch ($color) {
        case 'gray':
            $col = '#6B7280';
            break;
        case 'white':
            $col = '#ffffff';
            break;
        default:
            $col = '#6B7280';
            break;
    }
@endphp


<svg class="h-6 w-6 mt-2" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 512.000000 512.000000"
    preserveAspectRatio="xMidYMid meet" style=" fill:{{ $col }}">
    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
        <path
            d="M1375 4384 c-291 -45 -534 -171 -736 -381 -181 -188 -299 -429 -344 -702 -23 -138 -16 -424 14 -551 42 -180 116 -352 219 -510 46 -71 175 -205 776 -808 397 -398 748 -744 782 -768 141 -102 287 -147 474 -147 187 0 333 45 474 147 34 25 383 368 777 763 622 623 724 730 778 812 82 124 135 230 176 354 54 163 66 236 72 429 6 208 -8 323 -63 486 -151 458 -508 773 -982 869 -122 25 -404 24 -522 -1 -250 -53 -457 -149 -647 -298 l-62 -49 -90 68 c-315 240 -720 346 -1096 287z m426 -330 c219 -41 413 -143 587 -309 145 -137 199 -138 337 -6 174 167 367 269 590 315 360 73 722 -36 949 -286 168 -184 258 -429 259 -698 0 -257 -77 -492 -230 -693 -37 -50 -334 -353 -755 -773 -667 -664 -696 -692 -763 -722 -147 -66 -293 -64 -437 4 -70 34 -103 66 -752 712 -373 372 -705 710 -737 750 -343 426 -338 1044 12 1426 145 158 362 267 590 295 90 12 246 5 350 -15z">
        </path>
        <path
            d="M3612 3824 c-18 -10 -45 -33 -60 -52 -22 -29 -27 -46 -27 -92 0 -82 29 -115 149 -174 200 -97 304 -239 325 -443 9 -90 23 -118 75 -157 20 -16 42 -21 86 -21 63 0 95 16 134 69 18 24 21 42 20 124 -2 235 -118 454 -322 607 -48 36 -125 84 -171 107 -97 48 -159 57 -209 32z">
        </path>
    </g>
</svg>