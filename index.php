<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hare Krishna Chanters Club</title>
    <link rel="shortcut icon" href="./imgs/fav.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- <link rel="stylesheet" href="./action.php"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poetsen+One&display=swap');
    </style>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        #Hero-SubSection-A {
            padding-bottom: 10rem;
        }

        /* Ultra Large Screens (4K etc., ≥1400px) */
        @media (min-width: 1400px) {
            /* Your CSS here */

            #Hero-SubSection-A h1 {
                font-size: 3rem !important;
            }

            #Hero-SubSection-A img {
                height: 5rem !important;
            }

            .max-w-6xl {
                max-width: 80% !important;
            }

        }


        /* ✅ For 768x520 */
        @media screen and (max-width: 768px) and (max-height: 520px) {

            /* Your styles for 768x520 */
            body {
                background-color: lightgoldenrodyellow;
            }

            .Invitation-Card-Section {
                padding-top: 14rem;
                background-color: #58032A !important;
            }

            .bottom-quote {
                top: 50rem;
            }

            .mobile-hero-section {
                height: 58rem !important;
            }
        }


        /* ✅ For 425x520 */
        @media screen and (max-width: 425px) and (max-height: 520px) {

            /* Your styles for 425x520 */
            body {
                background-color: lightcoral;
            }

            .Invitation-Card-Section {
                padding-top: 14rem;
                background-color: #51062b !important;
            }

            .bottom-quote {
                top: 28rem;
            }

            .mobile-hero-section {
                height: 105vh !important;
            }
        }

        /* ✅ For 375x520 */
        @media screen and (max-width: 375px) and (max-height: 520px) {

            /* Your styles for 375x520 */
            body {
                background-color: lightgreen;
            }

            .Invitation-Card-Section {
                padding-top: 11rem;
                background-color: #51062b !important;
            }

            .bottom-quote {
                top: 24rem;
            }

            .mobile-hero-section {
                height: 105vh !important;
            }
        }


        /* ✅ For 320x520 */
        @media screen and (max-width: 320px) and (max-height: 520px) {

            /* Your styles for 320x520 */
            body {
                background-color: lightblue;
            }

            .Invitation-Card-Section {
                padding-top: 10rem;
                background-color: #51062b !important;
            }

            .bottom-quote {
                top: 21rem;
            }

            .Toggle-Buttons button {
                font-size: small;
            }

            .text-2xl {
                font-size: 1.1rem !important;
            }

            .mobile-hero-section {
                height: 105vh !important;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 leading-relaxed">
    <nav class="bg-white shadow-md sticky top-0 z-[999]">
        <div class="flex justify-between items-center py-1 max-w-6xl mx-6 lg:mx-auto">
            <img src="./Desktop/Nav-Bar/logo.png" alt="Chanters Club Logo"
                class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] lg:hidden">
            <img src="./Desktop/Nav-Bar/logo.png" alt="Chanters Club Logo"
                class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] hidden lg:block absolute top-2">

            <div></div>

            <div class="flex items-center gap-4">
                <a href="#registration"
                    class="bg-slate-500 text-white px-4 py-1/2 lg:px-5 lg:py-1 lg:my-2 rounded-lg lg:font-semibold">
                    Join Now
                </a>
            </div>
        </div>
    </nav>


    <header id="Hero-Section" class="hidden lg:flex relative text-white w-full min-h-[92vh] px-6 py-8 justify-center">
        <!-- Desktop Background -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('./Desktop/Hero-Section/Hero-Section-Image.png');">
        </div>

        <!-- Content container -->
        <div id="Hero-SubSection-A"
            class="relative z-10 max-w-6xl w-full flex flex-row justify-between gap-10 items-center">
            <!-- Left Text Section -->
            <div class="text-left w-1/2">
                <img src="./Desktop/Hero-Section/logo.png" alt="Chanters Club Logo" class="h-14 mb-6">

                <h1 class="text-4xl font-bold leading-tight font-['PT_Serif',serif] mb-4">
                    Join the Global Hare Krishna<br />
                    Chanters Club
                </h1>

                <p class="text-lg font-semibold mb-2 font-['PT_Serif',serif]">Chant Together, Grow Spiritually, Be
                    Happy.</p>
                <p class="mb-4 text-base leading-relaxed">
                    A worldwide community dedicated to chanting the holy names of the Lord Krishna.
                </p>

                <a href="#registration" class="bg-white text-black px-5 py-2 rounded-md font-semibold hover:bg-gray-200 transition">
                    Register Today
                </a>

                <p class="mt-4 text-sm">It's Easy, Fast & Effective!</p>
            </div>

            <!-- Right Visual Section -->
            <div class="w-1/2 h-full flex justify-end">
                <img src="./Desktop/Hero-Section/logo1.png" alt="Visual Chakra" class="w-[90px] h-[90px]">
            </div>
        </div>

        <!-- Bottom Quote -->
        <div id="#bottom-quote" class="absolute bottom-10 w-full text-center z-10">
            <p class="text-base leading-relaxed mb-2 font-['PT_Serif',serif]">
                Hare Kṛṣṇa Hare Kṛṣṇa Kṛṣṇa Kṛṣṇa Hare Hare<br />
                Hare Rāma Hare Rāma Rāma Rāma Hare Hare
            </p>
            <p class="text-xl font-['PT_Serif',serif]">
                ‘Chant Hare Krishna And Exactly The Same Sound You Hear’
            </p>
        </div>
    </header>

    <header class="relative lg:hidden text-white w-full h-[105vh] min-h-screen px-6 flex justify-center mobile-hero-section">
        <!-- Mobile Background -->
        <div class="absolute inset-0 top bg-cover"
            style="background-image: url('./Mobile-Version/Hero-Section/Background.png');">
        </div>

        <!-- Content container -->
        <div class="relative z-10 text-center max-w-xl w-full">
            <div class="flex justify-between items-center mt-2">
                <img src="./Mobile-Version/Hero-Section/image 8.png" alt="Chanters Club Logo"
                    class="w-16 mx-auto mb-6">
                <img src="./Mobile-Version/Hero-Section/Hero-Section-Logo-1.png" alt="Chanters Club Logo"
                    class="w-12 mx-auto mb-6">
                <img src="./Mobile-Version/Hero-Section/image 9.png" alt="Chanters Club Logo"
                    class="w-12 mx-auto mb-6">
            </div>
        </div>

        <!-- Bottom Quote -->
        <div class="absolute bottom-6 w-full text-center z-10 px-4 bottom-quote">
            <div class="w-36 h-36 mx-auto mb-6 rounded-full border-4 border-white overflow-hidden">
                <img src="./Desktop/Madhu-Pandit-Dasa/Madhu-Pandit-Dasa-Pic.png"
                    alt="Sri Madhu Pandit Dasa" class="object-cover w-full h-full">
            </div>

            <p class="my-4 text-xs font-['PT_Serif',serif]">
                Sri Madhu Pandit Dasa<br>
                Chairman, Global Hare Krishna Movement<br>
                President, ISKCON Bangalore
            </p>

            <p class="text-xs leading-relaxed mb-2 font-['PT_Serif',serif]">
                Hare Kṛṣṇa Hare Kṛṣṇa Kṛṣṇa Kṛṣṇa Hare Hare<br />
                Hare Rāma Hare Rāma Rāma Rāma Hare Hare
            </p>
            <p class="text-sm font-['PT_Serif',serif]">
                ‘Chant Hare Krishna And Exactly The Same Sound You Hear’
            </p>
        </div>
    </header>

    <!-- Invitation Card Section -->
    <section class="flex lg:hidden justify-center mt-0 pb-5 px-4 bg-[#430423] Invitation-Card-Section">
        <div class="bg-white max-w-md w-full text-center rounded-lg shadow-lg p-6">

            <!-- Heading -->
            <h3 class="text-lg font-semibold text-gray-900 mb-2 font-['PT_Serif',serif]">
                Join the Global Hare Krishna<br />
                Chanters Club
            </h3>

            <!-- Subheading -->
            <p class="font-semibold text-xs text-gray-800 mb-1 font-['PT_Serif',serif]">
                Chant Together, Grow Spiritually, Be Happy.
            </p>

            <!-- Description -->
            <p class="text-gray-600 text-xs mb-4">
                A worldwide community dedicated to chanting the holy names of the Lord Krishna.
            </p>

            <!-- Button -->
            <a href="#"
                class="inline-block bg-[#c40064] text-white px-5 py-2 rounded-md font-semibold hover:bg-slate-700 transition mb-2">
                Register Today
            </a>

            <!-- Footer Text -->
            <p class="text-gray-500 text-xs">It’s Easy, Fast & Effective!</p>
        </div>
    </section>


    <section class="hidden lg:flex items-start gap-2 max-w-5xl mx-auto px-6 py-16">
        <!-- Image + Name block -->
        <div class="flex flex-col items-center max-w-sm text-center">
            <img src="./Desktop/Madhu-Pandit-Dasa/Madhu-Pandit-Dasa-Pic.png"
                alt="Sri Madhu Pandit Dasa"
                class="rounded-lg w-full mb-6 shadow-md">
            <p class="text-lg font-semibold leading-snug">
                Sri Madhu Pandit Dasa<br>
                <span class="font-normal">Chairman, Global Hare Krishna Movement</span><br>
                <span class="font-normal">President, ISKCON Bangalore</span>
            </p>
        </div>

        <!-- Bio block -->
        <div class="flex-1 text-justify text-dark-800 text-[17px] mx-4">
            <p>
                Sri Madhu Pandit Dasa, born in Nagercoil, Tamil Nadu, became a full-time ISKCON member in 1981 while pursuing his M.Tech in Civil Engineering at IIT-Bombay. Since then, he has led numerous impactful public service initiatives and promoted Indian spirituality and culture among youth.
            </p>
            <br>
            <p>
                He serves as the Chairman and Mentor of the Global Hare Krishna Movement, and also chairs The Akshaya Patra Foundation, Vrindavan Chandrodaya Mandir, and the India Heritage Foundation.
            </p>
            <br>
            <p>
                His efforts have earned him honors like the Padma Shri, Gandhi Peace Prize, Nikkei Asia Prize, and IIT-Bombay’s Distinguished Alumnus Award.
            </p>
        </div>
    </section>


    <section class="hidden lg:block max-w-5xl mx-auto px-4 py-12">
        <h2 class="text-center text-2xl font-semibold  mb-8 font-['PT_Serif',serif]">Why You Should Join
            the Global Hare Krishna Chanters Club</h2>

        <h3 class="text-lg font-semibold text-gray-800 mb-4">Scriptural Reasons:</h3>
        <div class="flex flex-col gap-4 mb-8">
            <div class="bg-[#c40064] text-white p-4 rounded-xl flex items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame.png" alt="Icon" class="w-8 h-8">
                <span class="text-sm"><span class="text-base">Power of the Holy Name</span> - “Harinama is the
                    yuga-dharma
                    for Kali Yuga.” – Śrī
                    Caitanya Mahāprabhu</span>
            </div>
            <div class="bg-blue-900 text-white p-4 rounded-xl flex items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-1.png" alt="Icon" class="w-8 h-8">
                <span class="text-sm"><span class="text-base">Guaranteed Spiritual Progress</span> - “There is
                    no loss or
                    diminution in this path.” –
                    Bhagavad-gītā 2.40</span>
            </div>
            <div class="bg-[#50002a] text-white p-4 rounded-xl flex items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-2.png" alt="Icon" class="w-8 h-8">
                <span class="text-sm"><span class="text-base">Cleansing the Heart</span> - “Chanting cleanses
                    the mirror
                    of the heart...” – Śikṣāṣṭaka
                    Verse 1</span>
            </div>
        </div>

        <h3 class="text-lg font-semibold text-gray-800 mb-4">Practical Benefits:</h3>
        <div class="flex flex-col gap-4">
            <div class="bg-blue-900 text-white p-4 rounded-xl flex items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-3.png" alt="Icon" class="w-8 h-8">
                <span class="text-sm"><span class="text-base">Peace of Mind</span> - Reduce stress and anxiety through
                    daily mantra meditation.</span>
            </div>
            <div class="bg-[#50002a] text-white p-4 rounded-xl flex items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-4.png" alt="Icon" class="w-8 h-8">
                <span class="text-sm"><span class="text-base">Supportive Community</span> - Be part of a global family
                    that uplifts and encourages
                    you.</span>
            </div>
            <div class="bg-[#c40064] text-white p-4 rounded-xl flex items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-5.png" alt="Icon" class="w-8 h-8">
                <span class="text-sm"><span class="text-base">Build a Routine</span> - Establish a daily habit of
                    spiritual practice that transforms
                    your life.</span>
            </div>
        </div>
    </section>

    <section x-data="{ activeTab: 'scriptural' }" class="block lg:hidden max-w-5xl mx-auto px-4 py-12">
        <h2 class="text-center text-2xl font-semibold mb-8 font-['PT_Serif',serif]">
            Why You Should Join
        </h2>

        <!-- Toggle Buttons -->
        <div class="flex justify-center gap-4 mb-6 Toggle-Buttons">
            <button type="button" @click="activeTab = 'scriptural'" :class="activeTab === 'scriptural'
          ? 'bg-[#c40064] text-white'
          : 'border-2 border-[#c40064] text-[#c40064]'" class="font-small px-3 py-2 rounded-lg transition">
                Scriptural Reasons
            </button>

            <button type="button" @click="activeTab = 'practical'" :class="activeTab === 'practical'
          ? 'bg-[#c40064] text-white'
          : 'border-2 border-[#c40064] text-[#c40064]'" class="font-small px-3 py-2 rounded-lg transition">
                Practical Benefits
            </button>
        </div>

        <!-- Scriptural Cards -->
        <div x-show="activeTab === 'scriptural'" x-transition class="flex flex-col gap-4 mb-8">
            <div
                class="bg-[#c40064] text-white py-8 px-8 rounded-xl flex flex-col justify-center text-center items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame.png" alt="Icon" class="w-16 h-16">
                <span class="text-xs"><span class="text-sm font-semibold">Power of the Holy Name</span><br><br>
                    “Harinama is the yuga-dharma for Kali Yuga.” – Śrī Caitanya Mahāprabhu</span>
            </div>
            <div
                class="bg-blue-900 text-white py-8 px-8 rounded-xl flex flex-col justify-center text-center items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-1.png" alt="Icon" class="w-16 h-16">
                <span class="text-xs"><span class="text-sm font-semibold">Guaranteed Spiritual Progress</span><br><br>
                    “There is no loss or diminution in this path.” – Bhagavad-gītā 2.40</span>
            </div>
            <div
                class="bg-[#50002a] text-white py-8 px-8 rounded-xl flex flex-col justify-center text-center items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-2.png" alt="Icon" class="w-16 h-16">
                <span class="text-xs"><span class="text-sm font-semibold">Cleansing the Heart</span><br><br>
                    “Chanting cleanses the mirror of the heart...” – Śikṣāṣṭaka Verse 1</span>
            </div>
        </div>

        <!-- Practical Cards -->
        <div x-show="activeTab === 'practical'" x-transition class="flex flex-col gap-4">
            <div
                class="bg-blue-900 text-white py-8 px-8 rounded-xl flex flex-col justify-center text-center items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-3.png" alt="Icon" class="w-16 h-16">
                <span class="text-xs"><span class="text-sm font-semibold">Peace of Mind</span><br><br>
                    Reduce stress and anxiety through daily mantra meditation.</span>
            </div>
            <div
                class="bg-[#50002a] text-white py-8 px-8 rounded-xl flex flex-col justify-center text-center items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-4.png" alt="Icon" class="w-16 h-16">
                <span class="text-xs"><span class="text-sm font-semibold">Supportive Community</span><br><br>
                    Be part of a global family that uplifts and encourages you.</span>
            </div>
            <div
                class="bg-[#c40064] text-white py-8 px-8 rounded-xl flex flex-col justify-center text-center items-center gap-4">
                <img src="./Desktop/Why-Join/Icons/Frame-5.png" alt="Icon" class="w-16 h-16">
                <span class="text-xs"><span class="text-sm font-semibold">Build a Routine</span><br><br>
                    Establish a daily habit of spiritual practice that transforms your life.</span>
            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 py-12 text-center">
        <h2 class="text-2xl font-semibold mb-10 font-['PT_Serif',serif]">What You Get as a Member</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="w-36">
                <img src="./Desktop/What-You-Get/Frame-1000004854.png" alt="Icon"
                    class="w-16 mx-auto mb-2">
                <p class="text-sm">Weekly or daily chanting inspiration and support</p>
            </div>
            <div class="w-36">
                <img src="./Desktop/What-You-Get/Frame-1000004855.png" alt="Icon"
                    class="w-16 mx-auto mb-2">
                <p class="text-sm">Access to Japa challenges (e.g., 16 Rounds Challenge)</p>
            </div>
            <div class="w-36">
                <img src="./Desktop/What-You-Get/Frame-1000004860.png" alt="Icon"
                    class="w-16 mx-auto mb-2">
                <p class="text-sm">Online community groups (Telegram/ WhatsApp/Discord)</p>
            </div>
            <div class="w-36">
                <img src="./Desktop/What-You-Get/Frame-1000004857.png" alt="Icon"
                    class="w-16 mx-auto mb-2">
                <p class="text-sm">Live chanting sessions and guided meditations</p>
            </div>
            <div class="w-36">
                <img src="./Desktop/What-You-Get/Frame-1000004858.png" alt="Icon"
                    class="w-16 mx-auto mb-2">
                <p class="text-sm">Access to Srila Prabhupada’s teachings and Japa resources</p>
            </div>
            <div class="w-36">
                <img src="./Desktop/What-You-Get/Frame-1000004859.png" alt="Icon"
                    class="w-16 mx-auto mb-2">
                <p class="text-sm">Invitation to special events and global sankirtan festivals</p>
            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 py-16">
        <h2 class="text-2xl font-semibold text-center mb-12 font-['PT_Serif',serif]">Member Experiences</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            <div>
                <img src="./Desktop/Member-Experiences/Frame-1000004849.png" alt="Ananya Ramesh"
                    class="w-24 h-24 mx-auto rounded-full object-cover">
                <h3 class="font-bold mt-4">Ananya Ramesh</h3>
                <p class="text-sm text-gray-600">Bengaluru, India</p>
                <div class="relative mt-4">
                    <div
                        class="w-0 h-0 border-l-8 border-r-8 border-b-8 border-l-transparent border-r-transparent border-b-[#c40064] mx-auto">
                    </div>
                    <div class="bg-[#c40064] text-white text-sm p-4 rounded-md">
                        “Joining the Chanters Club changed my life. I used to chant alone and often felt unmotivated,
                        but now I feel part of a family. The weekly inspiration and live sessions keep me steady and
                        uplifted.”
                    </div>
                </div>
            </div>

            <div>
                <div class="hidden lg:block mb-4">
                    <div class="bg-blue-700 text-white text-sm p-4 rounded-md">
                        “I was new to mantra meditation and unsure where to start. The club gave me structure, gentle
                        guidance, and an amazing community. I’ve never felt more peaceful and connected.”
                    </div>
                    <div
                        class="w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-blue-700 mx-auto">
                    </div>
                </div>
                <img src="./Desktop/Member-Experiences/Frame-1000004850.png" alt="Jacob Matthews"
                    class="w-24 h-24 mx-auto rounded-full object-cover">
                <h3 class="font-bold mt-4">Jacob Matthews</h3>
                <p class="text-sm text-gray-600">New York, USA</p>
                <div class="relative lg:hidden mb-4">
                    <div
                        class="w-0 h-0 border-l-8 border-r-8 border-b-8 border-l-transparent border-r-transparent border-b-blue-700 mx-auto">
                    </div>
                    <div class="bg-blue-700 text-white text-sm p-4 rounded-md">
                        “I was new to mantra meditation and unsure where to start. The club gave me structure, gentle
                        guidance, and an amazing community. I’ve never felt more peaceful and connected.”
                    </div>
                </div>
            </div>

            <div>
                <img src="./Desktop/Member-Experiences/Frame-1000004851.png" alt="Kavita Sharma"
                    class="w-24 h-24 mx-auto rounded-full object-cover">
                <h3 class="font-bold mt-4">Kavita Sharma</h3>
                <p class="text-sm text-gray-600">London, UK</p>
                <div class="relative mt-4">
                    <div
                        class="w-0 h-0 border-l-8 border-r-8 border-b-8 border-l-transparent border-r-transparent border-b-[#1e1a72] mx-auto">
                    </div>
                    <div class="bg-[#1e1a72] text-white text-sm p-4 rounded-md">
                        “The 16 Rounds Challenge helped me build a routine I never thought I could maintain. I now look
                        forward to chanting every morning. It’s like food for the soul.”
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 py-16">
        <h2 class="text-2xl font-semibold text-center mb-6 font-['PT_Serif',serif]">How It Works</h2>

        <div class="hidden lg:flex justify-center text-sm font-semibold text-black-700 my-8 px-2">
            <span class="text-[18px]">Step 1</span>
            <img src="./Desktop/How-it-works/Arrow 1.svg" alt="Register Online" class="mx-4 w-[10rem]">
            <span class="text-[18px]">Step 2</span>
            <img src="./Desktop/How-it-works/Arrow 1.svg" alt="Register Online" class="mx-4 w-[10rem]">
            <span class="text-[18px]">Step 3</span>
            <img src="./Desktop/How-it-works/Arrow 1.svg" alt="Register Online" class="mx-4 w-[10rem]">
            <span class="text-[18px]">Step 4</span>
        </div>

        <div class="bg-[#FFDAE7] text-center rounded-xl p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <span class="lg:hidden"><b>Step 1</b></span>
            <div class="text-center bg-white p-4 rounded-md">
                <img src="./Desktop/How-it-works/Frame.png" alt="Register Online"
                    class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-semibold text-base mb-1">Register Online</h3>
                <p class="text-xs text-gray-700 leading-relaxed">
                    Sign up quickly and easily to become part of a global community of chanters. It’s free and open to everyone.
                </p>
            </div>

            <span class="lg:hidden"><b>Step 2</b></span>
            <div class="text-center bg-white p-4 rounded-md">
                <img src="./Desktop/How-it-works/Frame-1.png" alt="Join a Club"
                    class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-semibold text-base mb-1">Join a Club</h3>
                <p class="text-xs text-gray-700 leading-relaxed">
                    Get instant access to our WhatsApp, Telegram, or Discord groups where like-minded souls share inspiration daily.
                </p>
            </div>

            <span class="lg:hidden"><b>Step 3</b></span>
            <div class="text-center bg-white p-4 rounded-md">
                <img src="./Desktop/How-it-works/Frame-2.png" alt="Start Chanting"
                    class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-semibold text-base mb-1">Start Chanting</h3>
                <p class="text-xs text-gray-700 leading-relaxed">
                    Whether you’re new or experienced, receive step-by-step support, guided meditations, and helpful tips to build your practice.
                </p>
            </div>

            <span class="lg:hidden"><b>Step 4</b></span>
            <div class="text-center bg-white p-4 rounded-md">
                <img src="./Desktop/How-it-works/Frame-3.png" alt="Experience the Results"
                    class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-semibold text-base mb-1">Experience the Results</h3>
                <p class="text-xs text-gray-700 leading-relaxed">
                    Enjoy ongoing encouragement through messages, events, and personal check-ins to help you stay focused and spiritually nourished.
                </p>
            </div>
        </div>
    </section>


    <section id="registration"
        class="min-h-screen flex flex-col items-center justify-center px-4 py-10 relative lg:bg-slate-50">

        <div class="absolute inset-0 bg-cover bg-center z-0 opacity-100"
            style="background-image: url('./Desktop/Form/Background.png');"></div>


        <h2 class="text-2xl font-semibold text-center mb-10 text-gray-900 font-['PT_Serif',serif]">Join the Club - It's
            Free & Open to All!</h2>


        <div class="max-w-5xl w-full bg-white rounded-lg shadow-lg z-10 grid grid-cols-1 md:grid-cols-2 overflow-hidden">

            <div class="hidden lg:block h-full w-full">
                <img src="./Desktop/Form/Image.png" alt="Srila Prabhupada" class="h-full w-full object-cover" />
            </div>






            <!-- <div class="p-4 lg:p-8">
                <h2 class="text-xl font-bold mb-6 text-center font-['PT_Serif',serif]">REGISTER</h2>
                <form id="registrationForm" class="space-y-4">

                    <div class="form-step" id="step1">
                        <input id="fullname" name="fullname" placeholder="Full Name*" maxlength="50" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="dob" name="dob" placeholder="Date of Birth*" type="date" required class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="mobile" name="mobile" placeholder="WhatsApp No*" type="tel" required oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="email" name="email" placeholder="Email Address" maxlength="50" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z0-9@._-]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <div class="mb-2">
                            <label class="block text-sm font-medium">Gender*</label>
                            <label><input id="gender1" type="radio" name="gender" value="1" /> Male</label>
                            <label class="ml-4"><input id="gender2" type="radio" name="gender" value="2" /> Female</label>
                        </div>
                        <select id="marital" name="marital" required class="w-full border border-gray-300 rounded px-4 py-2 mb-2">
                            <option value="">Marital Status*</option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                        </select>
                        <div class="flex justify-end">
                            <button type="button" onclick="nextStep(2)" class="bg-slate-600 hover:bg-slate-700 text-white font-semibold py-2 px-6 rounded">Next</button>
                        </div>
                    </div>


                    <div class="form-step hidden" id="step2">
                        <input id="education" name="education" placeholder="Education Qualification*" maxlength="50" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="company" name="company" placeholder="Company Name" maxlength="50" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="designation" name="designation" placeholder="Designation" maxlength="50" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="motherTongue" name="motherTongue" placeholder="Mother Tongue*" maxlength="50" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="language" name="language" placeholder="Language for Communication*" maxlength="50" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <div class="flex gap-4 mb-2">
                            <select id="country" name="country" required class="w-1/2 border border-gray-300 rounded px-4 py-2">
                                <option value="">Country*</option>
                            </select>
                            <input id="state" name="state" placeholder="State*" maxlength="50" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2" />
                        </div>
                        <input id="city" name="city" placeholder="Current Living City*" maxlength="50" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <input id="area" name="area" placeholder="Area*" maxlength="100" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '')" class="w-full border border-gray-300 rounded px-4 py-2 mb-2" />
                        <div class="flex justify-between">
                            <button type="button" onclick="nextStep(1)" class="bg-gray-300 text-black font-semibold py-2 px-6 rounded">Back</button>
                            <button type="button" onclick="nextStep(3)" class="bg-slate-600 hover:bg-slate-700 text-white font-semibold py-2 px-6 rounded">Next</button>
                        </div>
                    </div>


                    <div class="form-step hidden" id="step3">
                        <select id="progress" name="progress" required class="w-full border border-gray-300 rounded px-4 py-2 mb-2">
                            <option value="">Would you like to progress spiritually?*</option>
                        </select>
                        <select id="volunteer" name="volunteer" required class="w-full border border-gray-300 rounded px-4 py-2 mb-2">
                            <option value="">Would you like to do volunteer service in temple?*</option>
                        </select>
                        <select id="chant_commitment" name="chant_commitment" required class="w-full border border-gray-300 rounded px-4 py-2 mb-2">
                            <option value="">Will you chant everyday 108 times Hare Krishna Mahamantra?*</option>
                        </select>
                        <select id="gita_class" name="gita_class" required class="w-full border border-gray-300 rounded px-4 py-2 mb-2">
                            <option value="">Would you like to join Online Gita Classes?*</option>
                        </select>
                        <div class="flex items-start mb-2">
                            <input type="checkbox" class="mt-1" checked />
                            <label class="ml-2 text-sm text-gray-600">I agree to receive occasional messages and event updates via WhatsApp</label>
                        </div>
                        <div class="flex justify-between mt-6">
                            <button type="button" onclick="nextStep(2)" class="bg-gray-300 text-black font-semibold py-2 px-6 rounded">Back</button>
                            <button type="submit" id="submitButton" onclick="submitForm(event)" class="bg-slate-600 hover:bg-slate-700 text-white font-semibold py-2 px-6 rounded">Join Now</button>
                        </div>
                    </div>
                    <span class="text-sm" id="chanterError"></span>
                </form>
            </div> -->










        </div>
        <script>
            Already = false;

            document.getElementById('mobile').addEventListener('blur', function() {
                const mobile = this.value.trim();



                const payload = {
                    mobile: mobile
                };


                fetch('action.php?action=validate-chanter-mobile-number', {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify(payload),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.exists) {
                            Already = false;
                        } else {
                            Already = true;
                        }
                    })
                    .catch(error => {
                        console.error('Error checking mobile:', error);
                    });
            });

            function nextStep(step) {
                var isValid = true;
                if (step == 2) {

                    if (Already) {
                        document.getElementById('chanterError').textContent = 'WhatsApp number already exists. Please use a different number.';
                        isValid = false;
                        return;
                    }

                    var fullname = document.getElementById('fullname');
                    var dob = document.getElementById('dob');
                    var mobile = document.getElementById('mobile');
                    var email = document.getElementById('email');
                    var gender1 = document.getElementById('gender1');
                    var gender2 = document.getElementById('gender2');

                    if (fullname.value.trim() === "") {
                        document.getElementById('chanterError').textContent = 'Full Name is required';
                        fullname.focus();
                        isValid = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (dob.value.trim() === "") {
                        document.getElementById('chanterError').textContent = 'DOB is required';
                        dob.focus();
                        isValid = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';

                        // ✅ Validate Age >= 18
                        let today = new Date();
                        let birthDate = new Date(dob.value);
                        let age = today.getFullYear() - birthDate.getFullYear();
                        let monthDiff = today.getMonth() - birthDate.getMonth();

                        // Adjust if birthday hasn’t occurred yet this year
                        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                            age--;
                        }

                        if (age < 18) {
                            document.getElementById('chanterError').textContent = 'Age must be at least 18 years';
                            dob.focus();
                            isValid = false;
                            return;
                        } else {
                            document.getElementById('chanterError').textContent = '';
                        }
                    }



                    var mobileValue = mobile.value.trim();
                    var mobileRegex = /^[6-9]\d{9}$/;

                    function allDigitsSame(str) {
                        return /^(\d)\1{9}$/.test(str);
                    }
                    if (!mobileRegex.test(mobileValue)) {
                        document.getElementById('chanterError').textContent = 'WhatsApp number must be 10 digits and start with 6, 7, 8, or 9.';
                        mobile.focus();
                        isValid = false;
                        return;
                    } else if (allDigitsSame(mobileValue)) {
                        document.getElementById('chanterError').textContent = 'WhatsApp number cannot have all digits the same.';
                        mobile.focus();
                        isValid = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (!marital.value || marital.value === "") {
                        document.getElementById('chanterError').textContent = 'Marital status is required.';
                        marital.focus();
                        isValid = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (email.value.trim() === "") {
                        document.getElementById('chanterError').textContent = 'Email is required.';
                        email.focus();
                        isValid = false;
                        return;
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
                        document.getElementById('chanterError').textContent = 'Please enter a valid email address.';
                        email.focus();
                        isValid = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }


                    if (!gender1.checked && !gender2.checked) {
                        document.getElementById('chanterError').textContent = 'Please select gender';
                        gender2.focus();
                        var isValid = false;
                        return;
                    } else {
                        if (gender1.checked) {
                            genderValue = gender1.value;
                        } else if (gender2.checked) {
                            genderValue = gender2.value;
                        } else {
                            document.getElementById('chanterError').textContent = '';
                        }
                    }
                } else if (step == 3) {

                    var education = document.getElementById('education');
                    var company = document.getElementById('company');
                    var designation = document.getElementById('designation');
                    var motherTongue = document.getElementById('motherTongue');
                    var language = document.getElementById('language');
                    var country = document.getElementById('country');
                    var state = document.getElementById('state');
                    var city = document.getElementById('city');
                    var area = document.getElementById('area');

                    if (education.value.trim() === "") {
                        document.getElementById('chanterError').textContent = 'Education is required';
                        education.focus();
                        isVal = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (motherTongue.value.trim() === "") {
                        document.getElementById('chanterError').textContent = "Mother Tongue is required.";
                        motherTongue.focus();
                        isVal = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (language.value.trim() === "") {
                        document.getElementById('chanterError').textContent = "Language is required.";
                        language.focus();
                        isVal = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (!country.value || country.value === "") {
                        document.getElementById('chanterError').textContent = "Country is required.";
                        country.focus();
                        isVal = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (state.value.trim() === "") {
                        document.getElementById('chanterError').textContent = "State is required.";
                        state.focus();
                        isVal = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (city.value.trim() === "") {
                        document.getElementById('chanterError').textContent = "City is required.";
                        city.focus();
                        isVal = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                    if (area.value.trim() === "") {
                        document.getElementById('chanterError').textContent = "Area is required.";
                        area.focus();
                        isVal = false;
                        return;
                    } else {
                        document.getElementById('chanterError').textContent = '';
                    }

                }

                if (isValid) {
                    const steps = document.querySelectorAll('.form-step');
                    steps.forEach((stepDiv, index) => {
                        stepDiv.classList.add('hidden');
                        if (index === step - 1) stepDiv.classList.remove('hidden');
                    });
                }
            }

            function submitForm(e) {
                e.preventDefault();

                var isValid = true;

                var progress = document.getElementById('progress');
                var volunteer = document.getElementById('volunteer');
                var chant_commitment = document.getElementById('chant_commitment');
                var gita_class = document.getElementById('gita_class');

                if (!progress.value || progress.value === "") {
                    document.getElementById('chanterError').textContent = "Progress is required.";
                    progress.focus();
                    isValid = false;
                    return;
                } else {
                    document.getElementById('chanterError').textContent = '';
                }

                if (!volunteer.value || volunteer.value === "") {
                    document.getElementById('chanterError').textContent = "Volunteer status is required.";
                    volunteer.focus();
                    isValid = false;
                    return;
                } else {
                    document.getElementById('chanterError').textContent = '';
                }

                if (!chant_commitment.value || chant_commitment.value === "") {
                    document.getElementById('chanterError').textContent = "Chant commitment is required.";
                    chant_commitment.focus();
                    isValid = false;
                    return;
                } else {
                    document.getElementById('chanterError').textContent = '';
                }

                if (!gita_class.value || gita_class.value === "") {
                    document.getElementById('chanterError').textContent = "Gita class is required.";
                    gita_class.focus();
                    isValid = false;
                    return;
                } else {
                    document.getElementById('chanterError').textContent = '';
                }

                if (document.getElementById('gender1').checked) {
                    genderValue = document.getElementById('gender1').value;
                } else if (document.getElementById('gender2').checked) {
                    genderValue = document.getElementById('gender2').value;
                } else {
                    document.getElementById('chanterError').textContent = '';
                }

                if (isValid) {

                    const params = new URLSearchParams(window.location.search);

                    const payload = {
                        fullname: document.getElementById('fullname').value,
                        gender: genderValue,
                        education: document.getElementById('education').value,
                        company: document.getElementById('company').value,
                        designation: document.getElementById('designation').value,
                        motherTongue: document.getElementById('motherTongue').value,
                        language: document.getElementById('language').value,
                        state: document.getElementById('state').value,
                        city: document.getElementById('city').value,
                        area: document.getElementById('area').value,
                        dob: document.getElementById('dob').value,
                        mobile: document.getElementById('mobile').value,
                        email: document.getElementById('email').value,
                        marital: document.getElementById('marital').value,
                        country: document.getElementById('country').value,
                        progress: document.getElementById('progress').value,
                        volunteer: document.getElementById('volunteer').value,
                        chant_commitment: document.getElementById('chant_commitment').value,
                        gita_class: document.getElementById('gita_class').value,
                        Center: params.get('Center'),
                        CN: params.get('CN'),
                    };

                    fetch("action.php?action=chanters-club-registration", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify(payload),
                        })
                        .then((response) => response.json())
                        .then((res) => {
                            document.getElementById('fullname').value = '';
                            document.getElementById('education').value = '';
                            document.getElementById('company').value = '';
                            document.getElementById('designation').value = '';
                            document.getElementById('motherTongue').value = '';
                            document.getElementById('language').value = '';
                            document.getElementById('state').value = '';
                            document.getElementById('city').value = '';
                            document.getElementById('area').value = '';
                            document.getElementById('dob').value = '';
                            document.getElementById('mobile').value = '';
                            document.getElementById('email').value = '';
                            document.getElementById('marital').value = '';
                            document.getElementById('country').value = '';
                            document.getElementById('progress').value = '';
                            document.getElementById('volunteer').value = '';
                            document.getElementById('chant_commitment').value = '';
                            document.getElementById('gita_class').value = '';

                            REGID = res.REGID ? res.REGID : "";
                            registerAgain(REGID);
                        })
                        .catch((error) => {
                            console.error("Error:", error);
                        })
                        .finally(() => {
                            document.getElementById("submitButton").disabled = false;
                            document.getElementById("submitButton").innerHTML =
                                "Joint Now";
                        });
                }
            }
            document.addEventListener("DOMContentLoaded", () => nextStep(1));
        </script>

    </section>


    <section class="max-w-5xl mx-auto px-4 py-16">
        <h2 class="text-2xl font-semibold text-center text-gray-900 mb-8 font-['PT_Serif',serif]">Frequently Asked
            Questions</h2>
        <div class="space-y-2" x-data="{ open: 1 }">
            <div class="border rounded overflow-hidden"
                :class="open === 1 ? 'bg-slate-700 text-white' : 'bg-gray-100 text-black'"
                @click="open = open === 1 ? null : 1">
                <button class="w-full text-left px-4 py-3 font-semibold flex justify-between items-center">
                    <span>Do I need to be an initiated devotee to join?</span>
                    <svg class="w-5 h-5 transform" :class="open === 1 ? 'rotate-180' : ''" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 1" x-collapse class="px-4 pb-4 text-sm">
                    Not at all. The Hare Krishna Chanters Club is open to everyone—whether you’re just beginning your
                    spiritual journey or have been chanting for years. No formal initiation is required. All that’s
                    needed is a sincere desire to chant and connect.
                </div>
            </div>

            <div class="border rounded overflow-hidden"
                :class="open === 2 ? 'bg-slate-700 text-white' : 'bg-gray-100 text-black'"
                @click="open = open === 2 ? null : 2">
                <button class="w-full text-left px-4 py-3 font-semibold flex justify-between items-center">
                    <span>Is it okay if I'm new to chanting?</span>
                    <svg class="w-5 h-5 transform" :class="open === 2 ? 'rotate-180' : ''" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 2" x-collapse class="px-4 pb-4 text-sm">
                    Absolutely. Beginners are welcome! We provide support and resources for all levels.
                </div>
            </div>

            <div class="border rounded overflow-hidden"
                :class="open === 3 ? 'bg-slate-700 text-white' : 'bg-gray-100 text-black'"
                @click="open = open === 3 ? null : 3">
                <button class="w-full text-left px-4 py-3 font-semibold flex justify-between items-center">
                    <span>What if I miss some days?</span>
                    <svg class="w-5 h-5 transform" :class="open === 3 ? 'rotate-180' : ''" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 3" x-collapse class="px-4 pb-4 text-sm">
                    No worries. The key is consistency over time. Just pick back up when you’re ready.
                </div>
            </div>

            <div class="border rounded overflow-hidden"
                :class="open === 4 ? 'bg-slate-700 text-white' : 'bg-gray-100 text-black'"
                @click="open = open === 4 ? null : 4">
                <button class="w-full text-left px-4 py-3 font-semibold flex justify-between items-center">
                    <span>How much time do I need to commit?</span>
                    <svg class="w-5 h-5 transform" :class="open === 4 ? 'rotate-180' : ''" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 4" x-collapse class="px-4 pb-4 text-sm">
                    Start with just a few minutes a day. We encourage regular practice, but even small steps make a big
                    difference.
                </div>
            </div>

            <div class="border rounded overflow-hidden"
                :class="open === 5 ? 'bg-slate-700 text-white' : 'bg-gray-100 text-black'"
                @click="open = open === 5 ? null : 5">
                <button class="w-full text-left px-4 py-3 font-semibold flex justify-between items-center">
                    <span>Can I join if I don’t follow all the practices of Krishna consciousness?</span>
                    <svg class="w-5 h-5 transform" :class="open === 5 ? 'rotate-180' : ''" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 5" x-collapse class="px-4 pb-4 text-sm">
                    Yes. The club welcomes everyone, regardless of background. Come as you are and grow at your pace.
                </div>
            </div>
        </div>

    </section>

    <section class="max-w-5xl mx-auto px-4 py-16">
        <h2 class="text-2xl sm:text-3xl font-semibold text-center text-gray-900 mb-8 font-['PT_Serif',serif]">
            About the Club
        </h2>

        <div class="space-y-6 text-gray-800 leading-relaxed">
            <!-- Full paragraph shown on large screens -->
            <p class="hidden lg:block text-base">
                The Hare Krishna Chanters Club was founded with a simple but powerful mission: to unite and inspire
                people across the world through the chanting of the Hare Krishna Mahamantra. Rooted in the timeless
                teachings of the Vedic scriptures, the club serves as a spiritual hub for individuals seeking inner
                peace, purpose, and a deeper connection with the Divine.
            </p>

            <div class="flex flex-col lg:flex-row justify-center gap-6 items-start">
                <!-- Responsive image -->
                <img src="./Desktop/About-the-club/ac_bv_prabhupada.png"
                    alt="Srila Prabhupada"
                    class="w-full md:w-1/2 max-w-sm rounded-xl shadow-md mx-auto md:mx-0">

                <!-- Text block -->
                <div class="space-y-4 text-sm sm:text-base">
                    <!-- Mobile-visible intro paragraph -->
                    <p class="lg:hidden">
                        The Hare Krishna Chanters Club was founded with a simple but powerful mission: to unite and
                        inspire people across the world through the chanting of the Hare Krishna Mahamantra. Rooted in
                        the timeless teachings of the Vedic scriptures, the club serves as a spiritual hub for
                        individuals seeking inner peace, purpose, and a deeper connection with the Divine.
                    </p>

                    <p>
                        The club is inspired by the vision of <strong>His Divine Grace A.C. Bhaktivedanta Swami
                            Prabhupada</strong>, the founder of ISKCON (International Society for Krishna Consciousness),
                        who tirelessly spread the practice of chanting across the globe. In alignment with Srila
                        Prabhupada’s mission, this club offers guidance, community, and resources to help every soul
                        chant sincerely and joyfully—regardless of background or level of experience.
                    </p>

                    <p>
                        Whether you're new to chanting or a long-time practitioner, the Hare Krishna Chanters Club is
                        here to support your spiritual journey, one mantra at a time. We welcome everyone—from curious
                        seekers to seasoned devotees—into a space where chanting is not just a practice, but a shared
                        experience of joy, transformation, and connection.
                    </p>
                </div>
            </div>

            <p class="text-sm sm:text-base">
                Through regular inspiration, live sessions, group challenges, and access to timeless teachings, members
                are empowered to deepen their relationship with the Holy Name and find strength in community. No matter
                where you are in the world or in your journey, you'll always have a place to chant, grow, and belong.
            </p>
        </div>
    </section>


    <footer class="bg-[#c70063] text-white px-6 md:px-16 py-10 border-t border-white/20">
        <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-10">
            <!-- Left Section -->
            <div>
                <img src="./Desktop/Footer/Logo.png" alt="Logo" class="w-16 mb-4">
                <p class="text-sm leading-relaxed mb-4">
                    <span>Chant. Connect. Transform.</span><br>
                    Uniting hearts around the world through<br>
                    the sacred sound of the Hare Krishna Mahamantra.
                </p>
                <div class="flex gap-4 mt-2">
                    <a href="#"><img src="./Desktop/Footer/Vector.png" alt="Facebook" class="w-6 h-6"></a>
                    <a href="#"><img src="./Desktop/Footer/Vector-1.png" alt="Instagram"
                            class="w-6 h-6"></a>
                    <a href="#"><img src="./Desktop/Footer/Vector-2.png" alt="LinkedIn"
                            class="w-6 h-6"></a>
                    <a href="#"><img src="./Desktop/Footer/Frame.png" alt="YouTube" class="w-6 h-6"></a>
                </div>
            </div>

            <!-- Middle Section -->
            <div>
                <h2 class="font-semibold mb-4">Quick Links</h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Srila Prabhupada books</a></li>
                    <li><a href="#" class="hover:underline">Chanting resources</a></li>
                    <li><a href="#" class="hover:underline">Volunteer opportunities</a></li>
                </ul>
            </div>

            <!-- Right Section -->
            <div>
                <h2 class="font-semibold mb-4">Contact Us</h2>
                <ul class="text-sm space-y-2">
                    <li>connect@iskconbangalore.org</li>
                    <li>+91 8023471956</li>
                    <li>
                        Hare Krishna Hill, Chord Road,<br>
                        Rajajinagar, Bengaluru 560010,<br>
                        Karnataka, India.
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Links -->
        <div class="mt-10 text-center text-sm space-x-6 text-white/90">
            <a href="#" class="underline decoration-slate-400 hover:underline">About Us</a>
            <a href="#" class="underline decoration-slate-400 hover:underline">Terms & Conditions</a>
            <a href="#" class="underline decoration-slate-400 hover:underline">Privacy Policy</a>
        </div>
    </footer>

    <script src="./script.js?v=1.0.0"></script>
</body>

</html>
