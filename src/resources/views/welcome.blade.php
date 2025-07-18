<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Jamie Portfolio</title>
        <meta name="description" content="" />
        <link
            rel="shortcut icon"
            href="./imgs/logo.png"
            type="image/x-icon"
        />

        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="Title of the project" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://github.com/PaulleDemon" />
        <!--Replace with the current website url-->
        <meta property="og:image" content="" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
            integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body
        class="tw-flex tw-min-h-[100vh] tw-flex-col tw-bg-[#fff] tw-font-mono"
    >
        <header
            class="tw-absolute tw-top-0 tw-z-20 tw-flex tw-h-[60px] tw-w-full tw-bg-opacity-0 tw-px-[5%] max-lg:tw-mr-auto max-lg:tw-px-4 lg:tw-justify-around"
        >
            <a
                class="tw-h-[50px] tw-p-[4px] tw-text-2xl tw-font-medium"
                href=""
            >
                Jamie
            </a>
            <div
                class="collapsible-header animated-collapse max-lg:tw-shadow-md"
                id="collapsed-header-items"
            >
                <div
                    class="tw-flex tw-h-full tw-w-max tw-gap-5 tw-text-base tw-text-black max-lg:tw-mt-[30px] max-lg:tw-flex-col max-lg:tw-place-items-end max-lg:tw-gap-5 lg:tw-mx-auto lg:tw-place-items-center"
                >
                    <a class="header-links" href=""> About Me </a>
                    <a class="header-links" href="#pricing"> Work </a>
                    <a class="header-links" href=""> Blog </a>
                    <a class="header-links" href=""> Contact me </a>
                </div>
                <div
                    class="tw-mx-4 tw-flex tw-place-items-center tw-gap-[20px] tw-text-base max-md:tw-w-full max-md:tw-flex-col max-md:tw-place-content-center"
                >
                    <a
                        href="https://tally.so/r/woO0Kx"
                        aria-label="signup"
                        class="tw-flex tw-h-[40px] tw-place-items-center tw-gap-2 tw-rounded-full tw-bg-black tw-p-1 tw-pl-4 tw-text-white"
                    >
                        <span>Get in touch</span>
                        <div
                            class="tw-flex tw-h-[30px] tw-w-[30px] tw-place-content-center tw-place-items-center tw-rounded-full tw-bg-white tw-font-semibold tw-text-black"
                        >
                            <i class="bi bi-arrow-up-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <button
                class="bi bi-list tw-absolute tw-right-3 tw-top-3 tw-z-50 tw-text-3xl tw-text-black lg:tw-hidden"
                onclick="toggleHeader()"
                aria-label="menu"
                id="collapse-btn"
            ></button>
        </header>

        <section
            class="tw-relative tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-overflow-hidden max-lg:tw-p-4 max-md:tw-mt-[50px]"
        >
            <div
                class="tw-flex tw-h-full tw-min-h-[100vh] tw-w-full tw-place-content-center tw-gap-6 tw-p-[5%] max-xl:tw-place-items-center max-lg:tw-flex-col"
            >
                <div class="tw-flex tw-flex-col tw-place-content-center">
                    <div
                        class="tw-flex tw-flex-wrap tw-text-7xl tw-font-semibold tw-uppercase tw-leading-[85px] max-lg:tw-text-4xl max-md:tw-leading-snug"
                    >
                        <span
                            class="reveal-hero-text tw-bg-green-200 tw-p-1 tw-px-6"
                        >
                            Jamie
                        </span>
                        <br />
                        <span class="reveal-hero-text">
                            Designer. AI engineer</span
                        >
                    </div>
                    <div
                        class="reveal-hero-text tw-mt-2 tw-max-w-[450px] tw-p-2 tw-text-justify max-lg:tw-max-w-full"
                    >
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Error adipisci corrupti accusamus reiciendis
                        similique assumenda nostrum fuga dicta vitae ipsum.
                    </div>

                    <div
                        class="reveal-hero-text tw-mt-4 tw-flex tw-place-items-center tw-gap-4 tw-overflow-hidden tw-p-2"
                    >
                        <a
                            href="https://tally.so/r/woO0Kx"
                            aria-label="signup"
                            class="tw-flex tw-h-[40px] tw-place-items-center tw-gap-2 tw-rounded-full tw-border-[1px] tw-border-solid tw-border-black tw-bg-white tw-p-1 tw-pl-4 tw-text-black tw-transition-colors tw-duration-[0.5s] hover:tw-bg-black hover:tw-text-white"
                        >
                            <span>Get in touch</span>
                            <div
                                class="tw-flex tw-h-[30px] tw-w-[30px] tw-place-content-center tw-place-items-center tw-rounded-full tw-bg-black tw-font-semibold tw-text-white"
                            >
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div
                    class="tw-flex tw-w-full tw-max-w-[50%] tw-place-content-center tw-place-items-center tw-overflow-hidden max-lg:tw-max-w-[unset]"
                >
                    <div
                        class="tw-relative tw-flex tw-max-h-[580px] tw-min-h-[450px] tw-min-w-[350px] tw-max-w-[650px] tw-overflow-hidden max-lg:tw-h-fit max-lg:tw-max-h-[320px] max-lg:tw-min-h-[180px] max-lg:tw-w-[320px] max-lg:tw-min-w-[320px]"
                    >
                        <img
                            src="./images/home/man.jpg"
                            alt="app"
                            class="reveal-hero-img tw-z-[1] tw-h-full tw-w-full tw-object-contain"
                        />
                    </div>
                </div>
            </div>
        </section>

        <section
            class="tw-relative tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-items-center tw-overflow-hidden tw-p-6 tw-py-5"
        >
            <h3 class="reveal-up tw-text-6xl tw-font-medium max-lg:tw-text-3xl">
                Past works
            </h3>
            <div
                class="reveal-up tw-my-4 tw-h-[1px] tw-w-[80%] tw-bg-black"
            ></div>
            <div
                class="tw-mt-8 tw-gap-10 tw-space-y-8 max-md:tw-columns-1 lg:tw-columns-2 xl:tw-columns-3"
            >
                <div
                    class="reveal-up tw-flex tw-h-fit tw-w-[450px] tw-break-inside-avoid tw-flex-col tw-gap-2 tw-rounded-lg tw-bg-[#f3f3f3b4] tw-p-4 tw-shadow-lg max-lg:tw-w-full max-lg:tw-max-w-[400px]"
                >
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div
                            class="tw-h-[300px] tw-w-full tw-overflow-hidden tw-rounded-lg"
                        >
                            <img
                                src="./images/home/design.jpg"
                                class="tw-h-full tw-w-full tw-object-cover"
                                alt="design"
                            />
                        </div>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <h3 class="tw-text-xl tw-font-medium">Lorem</h3>
                        <p class="tw-text-gray-600">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Beatae, vero.
                        </p>
                        <a href="http://" class="tw-mt-4">
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="reveal-up tw-flex tw-h-fit tw-w-[450px] tw-break-inside-avoid tw-flex-col tw-gap-2 tw-rounded-lg tw-bg-[#f3f3f3b4] tw-p-4 tw-shadow-lg max-lg:tw-w-full max-lg:tw-max-w-[400px]"
                >
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div
                            class="tw-h-[300px] tw-w-full tw-overflow-hidden tw-rounded-lg"
                        >
                            <img
                                src="./images/home/editing.jpg"
                                class="tw-h-full tw-w-full tw-object-cover"
                                alt="design"
                            />
                        </div>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <h3 class="tw-text-xl tw-font-medium">Fortune 500</h3>
                        <p class="tw-text-gray-600">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Eum dolorum unde voluptatibus fuga soluta
                            consequuntur!
                        </p>
                        <a href="http://" class="tw-mt-4">
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="reveal-up tw-flex tw-h-fit tw-w-[450px] tw-break-inside-avoid tw-flex-col tw-gap-2 tw-rounded-lg tw-bg-[#f3f3f3b4] tw-p-4 tw-shadow-lg max-lg:tw-w-full max-lg:tw-max-w-[400px]"
                >
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div
                            class="tw-h-[300px] tw-w-full tw-overflow-hidden tw-rounded-lg"
                        >
                            <img
                                src="./images/home/photography.jpg"
                                class="tw-h-full tw-w-full tw-object-cover"
                                alt="design"
                            />
                        </div>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <h3 class="tw-text-xl tw-font-medium">Apple</h3>
                        <p class="tw-text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Aut dolorem, optio totam perspiciatis,
                            perferendis assumenda nulla eaque autem ad magnam
                            quisquam voluptates dolor nostrum quae odit numquam
                            voluptas in atque.
                        </p>
                        <a href="http://" class="tw-mt-4">
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="reveal-up tw-flex tw-h-fit tw-w-[450px] tw-break-inside-avoid tw-flex-col tw-gap-2 tw-rounded-lg tw-bg-[#f3f3f3b4] tw-p-4 tw-shadow-lg max-lg:tw-w-full max-lg:tw-max-w-[400px]"
                >
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div
                            class="tw-h-[300px] tw-w-full tw-overflow-hidden tw-rounded-lg"
                        >
                            <img
                                src="./images/home/forest.jpg"
                                class="tw-h-full tw-w-full tw-object-cover"
                                alt="design"
                            />
                        </div>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <h3 class="tw-text-xl tw-font-medium">Amazon</h3>
                        <p class="tw-text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Culpa, tempora.
                        </p>
                        <a href="http://" class="tw-mt-4">
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="reveal-up tw-flex tw-h-fit tw-w-[450px] tw-break-inside-avoid tw-flex-col tw-gap-2 tw-rounded-lg tw-bg-[#f3f3f3b4] tw-p-4 tw-shadow-lg max-lg:tw-w-full max-lg:tw-max-w-[400px]"
                >
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div
                            class="tw-h-[300px] tw-w-full tw-overflow-hidden tw-rounded-lg"
                        >
                            <img
                                src="./images/home/mountain.jpg"
                                class="tw-h-full tw-w-full tw-object-cover"
                                alt="design"
                            />
                        </div>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <h3 class="tw-text-xl tw-font-medium">Ipsum</h3>
                        <p class="tw-text-gray-600">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Velit, voluptates.
                        </p>
                        <a href="http://" class="tw-mt-4">
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="reveal-up tw-flex tw-h-fit tw-w-[450px] tw-break-inside-avoid tw-flex-col tw-gap-2 tw-rounded-lg tw-bg-[#f3f3f3b4] tw-p-4 tw-shadow-lg max-lg:tw-w-full max-lg:tw-max-w-[400px]"
                >
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div
                            class="tw-h-[300px] tw-w-full tw-overflow-hidden tw-rounded-lg"
                        >
                            <img
                                src="./images/home/mountain.jpg"
                                class="tw-h-full tw-w-full tw-object-cover"
                                alt="design"
                            />
                        </div>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <h3 class="tw-text-xl tw-font-medium">Google</h3>
                        <p class="tw-text-gray-600">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Velit, voluptates.
                        </p>
                        <a href="http://" class="tw-mt-4">
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="tw-relative tw-mt-10 tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center lg:tw-p-6"
        >
            <div
                class="tw-flex tw-h-full tw-w-full tw-justify-around tw-gap-8 tw-rounded-xl tw-bg-[#e7e6e685] tw-p-4 max-lg:tw-max-w-full max-lg:tw-flex-col"
            >
                <div
                    class="reveal-up tw-flex tw-h-full tw-w-[50%] tw-place-content-center max-lg:tw-w-full lg:tw-sticky lg:tw-top-[20%]"
                >
                    <h3
                        class="tw-text-center tw-text-6xl tw-font-medium max-lg:tw-text-3xl"
                    >
                        What my colleagues say
                    </h3>
                </div>

                <div
                    class="reveal-up tw-flex tw-w-[30%] tw-flex-col tw-place-items-center tw-gap-4 tw-p-2 max-lg:tw-w-full"
                >
                    <div
                        class="tw-flex tw-h-fit tw-w-full tw-flex-col tw-gap-4 tw-border-2 tw-border-black tw-bg-white tw-p-4"
                    >
                        <div
                            class="tw-flex tw-w-full tw-place-items-center tw-gap-4 tw-p-2"
                        >
                            <div
                                class="tw-flex tw-h-[60px] tw-w-[60px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./images/people/women.jpg"
                                    alt="women"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                />
                            </div>

                            <div>
                                <p class="tw-text-xl tw-font-semibold">Lamie</p>
                                <p class="tw-text-lg tw-text-gray-600">
                                    Product manager, Apple
                                </p>
                            </div>
                        </div>
                        <div class="tw-text-justify tw-text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Facere voluptates pariatur, sequi dignissimos
                            aliquam, amet dolorem nobis deleniti qui nulla
                            accusamus voluptatibus quo impedit eligendi? Vel
                            perferendis nobis aut quasi?
                        </div>
                    </div>

                    <div
                        class="tw-flex tw-h-fit tw-w-full tw-flex-col tw-gap-4 tw-border-2 tw-border-black tw-bg-white tw-p-4"
                    >
                        <div
                            class="tw-flex tw-w-full tw-place-items-center tw-gap-4 tw-p-2"
                        >
                            <div
                                class="tw-flex tw-h-[60px] tw-w-[60px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./images/people/man.jpg"
                                    alt="women"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                />
                            </div>

                            <div>
                                <p class="tw-text-xl tw-font-semibold">Joy</p>
                                <p class="tw-text-lg tw-text-gray-600">
                                    Head of AI, Apple
                                </p>
                            </div>
                        </div>
                        <div class="tw-text-justify tw-text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Necessitatibus, suscipit vitae doloribus et
                            nesciunt officiis nisi laboriosam odit expedita
                            impedit ipsum ea hic optio odio in, esse quibusdam
                            doloremque sint explicabo nobis iste, aspernatur
                            voluptates facere ipsa? Tempora, in. Dignissimos?
                        </div>
                    </div>

                    <div
                        class="tw-flex tw-h-fit tw-w-full tw-flex-col tw-gap-4 tw-border-2 tw-border-black tw-bg-white tw-p-4"
                    >
                        <div
                            class="tw-flex tw-w-full tw-place-items-center tw-gap-4 tw-p-2"
                        >
                            <div
                                class="tw-flex tw-h-[60px] tw-w-[60px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./images/people/man2.jpg"
                                    alt="women"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                />
                            </div>

                            <div>
                                <p class="tw-text-xl tw-font-semibold">Ben</p>
                                <p class="tw-text-lg tw-text-gray-600">
                                    Senior manager, Google
                                </p>
                            </div>
                        </div>
                        <div class="tw-text-justify tw-text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dicta doloremque alias accusamus veniam sequi
                            vero ex! Necessitatibus molestias, consectetur fuga
                            quasi dolorum vitae mollitia sequi deserunt itaque
                            optio rem maxime?
                        </div>
                    </div>

                    <div
                        class="tw-flex tw-h-fit tw-w-full tw-flex-col tw-gap-4 tw-border-2 tw-border-black tw-bg-white tw-p-4"
                    >
                        <div
                            class="tw-flex tw-w-full tw-place-items-center tw-gap-4 tw-p-2"
                        >
                            <div
                                class="tw-flex tw-h-[60px] tw-w-[60px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./images/people/women.jpg"
                                    alt="women"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                />
                            </div>

                            <div>
                                <p class="tw-text-xl tw-font-semibold">Laura</p>
                                <p class="tw-text-lg tw-text-gray-600">
                                    UI & UX, Apple
                                </p>
                            </div>
                        </div>
                        <div class="tw-text-justify tw-text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Facere voluptates pariatur, sequi dignissimos
                            aliquam, amet dolorem nobis deleniti qui nulla
                            accusamus voluptatibus quo impedit eligendi? Vel
                            perferendis nobis aut quasi?
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="tw-relative tw-flex tw-min-h-[80vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-6"
            id=""
        >
            <div
                class="tw-mt-8 tw-flex tw-flex-col tw-place-items-center tw-gap-5"
            >
                <div
                    class="reveal-up tw-mt-5 tw-flex tw-flex-col tw-gap-3 tw-text-center"
                >
                    <h2 class="tw-text-4xl tw-font-semibold">
                        Work with an expert
                    </h2>
                </div>
                <div
                    class="tw-mt-6 tw-flex tw-max-w-[60%] tw-flex-wrap tw-place-content-center tw-gap-2 max-lg:tw-flex-col"
                >
                    <div
                        class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4"
                    >
                        <!-- <img src="./images/home/sample.jpg" 
                                alt="feature1"> -->
                        <div class="tw-flex tw-gap-1">
                            <i class="bi bi-boombox-fill tw-text-2xl"></i>
                            <h3 class="tw-text-2xl tw-font-semibold">
                                Frontend developer
                            </h3>
                        </div>
                        <div class="tw-text-[#595959]">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4"
                    >
                        <!-- <img src="./images/home/sample.jpg" 
                                alt="feature1"> -->
                        <div class="tw-flex tw-gap-1">
                            <i class="bi bi-0-circle-fill tw-text-2xl"></i>
                            <h3 class="tw-text-2xl tw-font-semibold">
                                ML & AI
                            </h3>
                        </div>
                        <div class="tw-text-[#595959]">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4"
                    >
                        <!-- <img src="./images/home/sample.jpg" 
                                alt="feature1"> -->
                        <div class="tw-flex tw-gap-1">
                            <i class="bi bi-0-square-fill tw-text-2xl"></i>
                            <h3 class="tw-text-2xl tw-font-semibold">
                                Backend developer
                            </h3>
                        </div>
                        <div class="tw-text-[#595959]">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4"
                    >
                        <!-- <img src="./images/home/sample.jpg" 
                                alt="feature1"> -->
                        <div class="tw-flex tw-gap-1">
                            <i class="bi bi-database-fill tw-text-2xl"></i>
                            <h3 class="tw-text-2xl tw-font-semibold">
                                Database
                            </h3>
                        </div>
                        <div class="tw-text-[#595959]">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4"
                    >
                        <!-- <img src="./images/home/sample.jpg" 
                                alt="feature1"> -->
                        <div class="tw-flex tw-gap-1">
                            <i class="bi bi-cake-fill tw-text-2xl"></i>
                            <h3 class="tw-text-2xl tw-font-semibold">Redis</h3>
                        </div>
                        <div class="tw-text-[#595959]">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4"
                    >
                        <!-- <img src="./images/home/sample.jpg" 
                                alt="feature1"> -->
                        <div class="tw-flex tw-gap-1">
                            <i class="bi bi-shield-fill tw-text-2xl"></i>
                            <h3 class="tw-text-2xl tw-font-semibold">Figma</h3>
                        </div>
                        <div class="tw-text-[#595959]">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </div>
                    </div>
                </div>

                <a
                    href="https://tally.so/r/woO0Kx"
                    aria-label="signup"
                    class="reveal-up tw-flex tw-h-[40px] tw-place-items-center tw-gap-2 tw-rounded-full tw-bg-black tw-p-1 tw-pl-4 tw-text-white"
                >
                    <span>Get in touch</span>
                    <div
                        class="tw-flex tw-h-[30px] tw-w-[30px] tw-place-content-center tw-place-items-center tw-rounded-full tw-bg-white tw-font-semibold tw-text-black"
                    >
                        <i class="bi bi-arrow-up-right"></i>
                    </div>
                </a>
            </div>
        </section>

        <section
            class="tw-mt-5 tw-flex tw-w-full tw-flex-col tw-place-items-center tw-p-[2%] max-lg:tw-p-3"
        >
            <h3
                class="reveal-up tw-text-center tw-text-4xl tw-font-medium max-md:tw-text-2xl"
            >
                Read my articles for more insights ✨
            </h3>
            <!-- pricing -->
            <div
                class="reveal-up tw-mt-10 tw-flex tw-flex-wrap tw-place-content-center tw-gap-10 max-lg:tw-flex-col"
            >
                <a
                    href=""
                    class="tw-flex tw-h-[400px] tw-w-[350px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-bg-[#edecec79] tw-p-4 tw-shadow-xl max-lg:tw-w-[300px]"
                >
                    <div
                        class="tw-h-[200px] tw-w-full tw-overflow-hidden tw-rounded-md"
                    >
                        <img
                            src="./images/home/forest.jpg"
                            alt="article image"
                            class="tw-h-full tw-w-full tw-object-cover"
                            srcset=""
                        />
                    </div>
                    <h3 class="tw-text-2xl tw-font-semibold max-md:tw-text-xl">
                        Article 1
                    </h3>
                    <p class="tw-mt-2 tw-text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ab, explicabo!
                    </p>
                    <span>
                        <span>Learn more</span>
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </a>
                <a
                    href=""
                    class="tw-flex tw-h-[400px] tw-w-[350px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-bg-[#edecec79] tw-p-4 tw-shadow-xl max-lg:tw-w-[300px]"
                >
                    <div
                        class="tw-h-[200px] tw-w-full tw-overflow-hidden tw-rounded-md"
                    >
                        <img
                            src="./images/home/mountain.jpg"
                            alt="article image"
                            class="tw-h-full tw-w-full tw-object-cover"
                            srcset=""
                        />
                    </div>
                    <h3 class="tw-text-2xl tw-font-semibold max-md:tw-text-xl">
                        Article 2
                    </h3>
                    <p class="tw-mt-2 tw-text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ab, explicabo!
                    </p>
                    <span>
                        <span>Learn more</span>
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </a>
                <a
                    href=""
                    class="tw-flex tw-h-[400px] tw-w-[350px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-bg-[#edecec79] tw-p-4 tw-shadow-xl max-lg:tw-w-[300px]"
                >
                    <div
                        class="tw-h-[200px] tw-w-full tw-overflow-hidden tw-rounded-md"
                    >
                        <img
                            src="./images/home/photography.jpg"
                            alt="article image"
                            class="tw-h-full tw-w-full tw-object-cover"
                            srcset=""
                        />
                    </div>
                    <h3 class="tw-text-2xl tw-font-semibold max-md:tw-text-xl">
                        Article 3
                    </h3>
                    <p class="tw-mt-2 tw-text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ab, explicabo!
                    </p>
                    <span>
                        <span>Learn more</span>
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </a>
            </div>
        </section>

        <hr class="tw-mt-4" />

        <footer
            class="tw-mt-auto tw-flex tw-min-h-[100px] tw-w-full tw-place-content-around tw-place-items-center tw-gap-3 tw-p-[2%] tw-px-[10%] tw-text-black max-md:tw-flex-col"
        >
            <div class="tw-flex tw-gap-6 tw-text-2xl">
                <a href="" aria-label="Github">
                    <i class="bi bi-github"></i>
                </a>
                <a
                    href="https://twitter.com/@pauls_freeman"
                    aria-label="Twitter"
                >
                    <i class="bi bi-twitter"></i>
                </a>
                <a
                    href="https://stackoverflow.com/"
                    class="tw-h-[40px] tw-w-[40px]"
                    aria-label="stackoverflow"
                >
                    <i class="bi bi-stack-overflow"></i>
                </a>
            </div>
        </footer>
    </body>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"
        integrity="sha512-B1lby8cGcAUU3GR+Fd809/ZxgHbfwJMp0jLTVfHiArTuUt++VqSlJpaJvhNtRf3NERaxDNmmxkdx2o+aHd4bvw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"
        integrity="sha512-AY2+JxnBETJ0wcXnLPCcZJIJx0eimyhz3OJ55k2Jx4RtYC+XdIi2VtJQ+tP3BaTst4otlGG1TtPJ9fKrAUnRdQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
</html>
