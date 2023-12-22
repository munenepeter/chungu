<main>
    <style>
        .tile {
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            display: block;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            min-height: -webkit-min-content;
            min-height: -moz-min-content;
            min-height: min-content
        }

        .tile.is-ancestor {
            margin-left: -0.75rem;
            margin-right: -0.75rem;
            margin-top: -0.75rem
        }

        .tile.is-ancestor:last-child {
            margin-bottom: -0.75rem
        }

        .tile.is-ancestor:not(:last-child) {
            margin-bottom: .75rem
        }

        .tile.is-child {
            margin: 0 !important
        }

        .tile.is-parent {
            padding: .75rem
        }

        .tile.is-vertical {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .tile.is-vertical>.tile.is-child:not(:last-child) {
            margin-bottom: 1.5rem !important
        }

        @media screen and (min-width: 769px),
        print {
            .tile:not(.is-child) {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }

            .tile.is-1 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 8.33333337%
            }

            .tile.is-2 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 16.66666674%
            }

            .tile.is-3 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 25%
            }

            .tile.is-4 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 33.33333337%
            }

            .tile.is-5 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 41.66666674%
            }

            .tile.is-6 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 50%
            }

            .tile.is-7 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 58.33333337%
            }

            .tile.is-8 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 66.66666674%
            }

            .tile.is-9 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 75%
            }

            .tile.is-10 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 83.33333337%
            }

            .tile.is-11 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 91.66666674%
            }

            .tile.is-12 {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 100%
            }
        }

        .tile.has-background-image {
            background-size: 200px 100px;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            -webkit-transition: all .3s;
            transition: all .3s;
            padding: 1.25rem 2rem
        }

        .tile.has-background-image:hover .tile-overlay {
            background: #789649f3
        }

        .tile.has-background-image:hover .tile-content .divider {
            width: 100% !important
        }

        .tile.has-background-image:hover .tile-content p,
        .tile.has-background-image:hover .tile-content .products,
        .tile.has-background-image:hover .tile-content .action {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        .tile.has-background-image .tile-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(234, 250, 214, 0.329);
            -webkit-transition: all .3s;
            transition: all .3s;
            z-index: 0
        }

        .tile.has-background-image .tile-content {
            position: relative;
            height: 100%;
            z-index: 2
        }

        .tile.has-background-image .tile-content.is-small .divider,
        .tile.has-background-image .tile-content.is-small p {
            display: none
        }

        .tile.has-background-image .tile-content .shop-category {
            font-family: "Raleway", sans-serif;
            font-weight: 400;
            font-size: 1.2rem;
            color: #DE7B65;
            letter-spacing: 3px
        }

        .shop-category::hover {
            color: white;
        }

        .tile.has-background-image .tile-content .shop-category.is-small {
            font-size: .9rem
        }

        .tile.has-background-image .tile-content .divider {
            height: 1.4px;
            background: #DE7B65;
            width: 0%;
            min-width: 0px;
            margin: 10px 0;
            -webkit-transition: width .3s ease;
            transition: width .3s ease
        }

        .tile.has-background-image .tile-content p {
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 1rem;
            font-weight: 400;
            opacity: 0;
            -webkit-transform: translateY(20px);
            transform: translateY(20px);
            -webkit-transition: all .4s;
            transition: all .4s;
            font-size: .9rem
        }

        .tile.has-background-image .tile-content p.is-italic {
            font-weight: 300;
            font-size: .7rem;
            font-family: "Raleway", sans-serif
        }

        .tile.has-background-image .tile-content .products {
            color: #fff;
            position: absolute;
            bottom: 0;
            padding: 0;
            left: 0;
            opacity: 0;
            -webkit-transform: translateY(20px);
            transform: translateY(20px);
            -webkit-transition: all .4s;
            transition: all .4s;
            -webkit-transition-delay: .1s;
            transition-delay: .1s
        }

        .tile.has-background-image .tile-content .products span {
            text-transform: uppercase;
            font-family: "Raleway", sans-serif;
            font-size: 50%;
            font-weight: 300
        }

        .tile.has-background-image .tile-content .action {
            position: absolute;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #fff;
            opacity: 0;
            -webkit-transform: translateY(50px);
            transform: translateY(50px);
            -webkit-transition: all .3s;
            transition: all .3s;
            -webkit-transition-delay: .15s;
            transition-delay: .15s
        }

        .tile.has-background-image .tile-content .action span {
            font-family: "Raleway", sans-serif;
            font-size: .75rem;
            font-weight: 400;
            text-transform: uppercase
        }

        .tile.has-background-image .tile-content .action svg {
            width: 16px;
            height: 16px;
            stroke: #fff;
            opacity: 0;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            -webkit-transition: all .3s;
            transition: all .3s
        }

        .tile.has-background-image .tile-content .action:hover {
            opacity: .7
        }

        .tile.has-background-image .tile-content .action:hover svg {
            opacity: 1;
            -webkit-transform: translateX(5px);
            transform: translateX(5px)
        }

        .tile.is-relative {
            position: relative
        }

        .tile.has-min-height {
            min-height: 280px
        }

        .tile.has-background-image {
            min-height: 300px !important;
            padding: 1.25rem 1.5rem !important
        }

        .tile.has-background-image .tile-content {
            height: 260px !important
        }

        .tile.has-background-image .tile-content.is-small .divider,
        .tile.has-background-image .tile-content.is-small p {
            display: block !important
        }

        .tile.has-background-image .tile-content .products {
            position: absolute;
            bottom: 0;
            padding: 0;
            left: 0
        }

        .tile.has-background-image {
            min-height: 300px !important;
            padding: 1.25rem 1.5rem !important
        }

        .tile.has-background-image .tile-content {
            height: 260px !important
        }

        .tile.has-background-image .tile-content.is-small .divider,
        .tile.has-background-image .tile-content.is-small p {
            display: block !important
        }

        .tile.has-background-image .tile-content .products {
            position: absolute;
            bottom: 0;
            padding: 0;
            left: 0
        }
    </style>

    {{-- https://codepen.io/robstinson/pen/VwKLbBz?editors=1010 --}}

    <section class="flex w-full shadow-inner">
        <section id="shopItems" class="container px-5 py-6 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 lg:gap-8 -m-4 sm:p-4 gap-2">
               @foreach ($categories as $category)
                <div class="tile is-parent">
                    <article class="tile is-child has-background-image"
                        style="background-image: url('https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&w=600');">
                        <div class="tile-content">
                            <h2 class="shop-category"><?= strtoupper($category->name) ?></h2>
                            <div class="divider"></div>
                            <p class="italic">Finest <?= $category->name ?> collected amongst the country's best
                                artisans.</p>
                            <div class="products">
                                <?= $category->count ?> <span><?= $category->name ?></span>
                            </div>
                            <a href="/collections/<?= $category->slug ?>" class="action">
                                <span>More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                        <!-- Overlay -->
                        <div class="tile-overlay"></div>
                    </article>
                </div>
                @endforeach
            </div>
        </section>
    </section>
</main>
