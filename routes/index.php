<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<!DOCTYPE html>
<html lang="fr">

<?php
function shuffle_return($array)
{
    global $base, $script;
    if ($base == $script) shuffle($array);
    return $array;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo.png" type="image/png">
    <script src="https://unpkg.com/@tailwindcss/browser@4.0.6/dist/index.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @font-face {
            font-family: "OpenMoji";
            src: url("/OpenMoji.woff2") format("woff2");
            unicode-range: U+23, U+2A, U+2D, U+30-39, U+A9, U+AE, U+200D, U+203C, U+2049, U+20E3, U+2117, U+2120, U+2122, U+2139, U+2194-2199, U+21A9, U+21AA, U+229C, U+231A, U+231B, U+2328, U+23CF, U+23E9-23F3, U+23F8-23FE, U+24C2, U+25A1, U+25AA-25AE, U+25B6, U+25C0, U+25C9, U+25D0, U+25D1, U+25E7-25EA, U+25ED, U+25EE, U+25FB-25FE, U+2600-2605, U+260E, U+2611, U+2614, U+2615, U+2618, U+261D, U+2620, U+2622, U+2623, U+2626, U+262A, U+262E, U+262F, U+2638-263A, U+2640, U+2642, U+2648-2653, U+265F, U+2660, U+2663, U+2665, U+2666, U+2668, U+267B, U+267E, U+267F, U+2691-2697, U+2699, U+269B, U+269C, U+26A0, U+26A1, U+26A7, U+26AA, U+26AB, U+26B0, U+26B1, U+26BD, U+26BE, U+26C4, U+26C5, U+26C8, U+26CE, U+26CF, U+26D1, U+26D3, U+26D4, U+26E9, U+26EA, U+26F0-26F5, U+26F7-26FA, U+26FD, U+2702, U+2705, U+2708-270D, U+270F, U+2712, U+2714, U+2716, U+271D, U+2721, U+2728, U+2733, U+2734, U+2744, U+2747, U+274C, U+274E, U+2753-2755, U+2757, U+2763, U+2764, U+2795-2797, U+27A1, U+27B0, U+27BF, U+2934, U+2935, U+2B05-2B07, U+2B0C, U+2B0D, U+2B1B, U+2B1C, U+2B1F-2B24, U+2B2E, U+2B2F, U+2B50, U+2B55, U+2B58, U+2B8F, U+2BBA-2BBC, U+2BC3, U+2BC4, U+2BEA, U+2BEB, U+3030, U+303D, U+3297, U+3299, U+E000-E009, U+E010, U+E011, U+E040-E06D, U+E080-E0B4, U+E0C0-E0CC, U+E0FF-E10D, U+E140-E14A, U+E150-E157, U+E181-E189, U+E1C0-E1C4, U+E1C6-E1D9, U+E200-E216, U+E240-E269, U+E280-E283, U+E2C0-E2C4, U+E2C6-E2DA, U+E300-E303, U+E305-E30F, U+E312-E316, U+E318-E322, U+E324-E329, U+E32B, U+E340-E348, U+E380, U+E381, U+F000, U+F77A, U+F8FF, U+FE0F, U+1F004, U+1F0CF, U+1F10D-1F10F, U+1F12F, U+1F16D-1F171, U+1F17E, U+1F17F, U+1F18E, U+1F191-1F19A, U+1F1E6-1F1FF, U+1F201, U+1F202, U+1F21A, U+1F22F, U+1F232-1F23A, U+1F250, U+1F251, U+1F260-1F265, U+1F300-1F321, U+1F324-1F393, U+1F396, U+1F397, U+1F399-1F39B, U+1F39E-1F3F0, U+1F3F3-1F3F5, U+1F3F7-1F4FD, U+1F4FF-1F53D, U+1F549-1F54E, U+1F550-1F567, U+1F56F, U+1F570, U+1F573-1F57A, U+1F587, U+1F58A-1F58D, U+1F590, U+1F595, U+1F596, U+1F5A4, U+1F5A5, U+1F5A8, U+1F5B1, U+1F5B2, U+1F5BC, U+1F5C2-1F5C4, U+1F5D1-1F5D3, U+1F5DC-1F5DE, U+1F5E1, U+1F5E3, U+1F5E8, U+1F5EF, U+1F5F3, U+1F5FA-1F64F, U+1F680-1F6C5, U+1F6CB-1F6D2, U+1F6D5-1F6D7, U+1F6DC-1F6E5, U+1F6E9, U+1F6EB, U+1F6EC, U+1F6F0, U+1F6F3-1F6FC, U+1F7E0-1F7EB, U+1F7F0, U+1F90C-1F93A, U+1F93C-1F945, U+1F947-1F9FF, U+1FA70-1FA7C, U+1FA80-1FA88, U+1FA90-1FABD, U+1FABF-1FAC5, U+1FACE-1FADB, U+1FAE0-1FAE8, U+1FAF0-1FAF8, U+1FBC5-1FBC9, U+E0061-E0067, U+E0069, U+E006C-E0079, U+E007F;
        }

        * {
            -moz-user-select: -moz-none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            -o-user-select: none;
            user-select: none;
            -webkit-user-drag: none;
            user-drag: none;
        }

        img {
            pointer-events: none;
        }

        span,
        input,
        textarea {
            font-family: OpenMoji, sans-serif;
        }

        section {
            min-height: calc(100vh - calc(var(--spacing) * 7) - calc(var(--spacing) * 8))
        }
    </style>
</head>

<body class="flex flex-col min-h-screen w-full bg-white text-black">
    <!-- <div class="fixed inset-0 z-50 pointer-events-none">
        <div class="absolute top-1/2 left-0 w-full h-px bg-red-500 transform -translate-y-1/2"></div>
        <div class="absolute top-0 left-1/2 h-full w-px bg-red-500 transform -translate-x-1/2"></div>
    </div> -->
    <nav class="fixed top-0 w-full h-full z-30 max-h-15">
        <div class="bg-black text-white h-full px-4">
            <div class="container w-full h-full flex justify-between justify-self-center items-center gap-4 relative">
                <ul class="md:inline-flex hidden gap-8 w-fit justify-end flex-grow text-base">
                    <li><a class="hover:text-white/75 transition-all ease-in-out duration-200" href="/realiste">Réaliste</a></li>
                    <li><a class="hover:text-white/75 transition-all ease-in-out duration-200" href="/viva-pinata">Viva Piñata</a></li>
                </ul>
                <div class="md:flex-grow md:w-min justify-items-center h-full">
                    <a class="flex items-center h-full w-auto justify-center cursor-pointer flex-shrink-0 hover:opacity-75 transition-all ease-in-out duration-300" href="/">
                        <img class="h-full py-1" src="/logo.png" alt="Logo de TenderNess">
                    </a>
                </div>
                <ul class="md:inline-flex hidden gap-8 w-fit justify-end flex-row-reverse flex-grow text-base">
                    <li><a class="hover:text-white/75 transition-all ease-in-out duration-200" href="/nous-contacter">Nous contacter</a></li>
                    <li><a class="hover:text-white/75 transition-all ease-in-out duration-200" href="/a-propos-de-nous">À propos de nous</a></li>
                </ul>
                <div class="contents">
                    <input type="checkbox" id="menuToggle" class="peer hidden" />
                    <label for="menuToggle" class="md:hidden cursor-pointer text-white focus:outline-none z-50 relative w-8 h-8">
                        <i class="fas fa-bars text-3xl absolute inset-0"></i>
                    </label>
                    <ul class="hidden flex-col items-center space-y-4 bg-black text-white py-4 px-4 absolute inset-x-0 top-0 peer-checked:flex md:!hidden">
                        <li><a href="/realiste" class="cursor-pointer hover:text-white/75 transition-all ease-in-out duration-200">Réaliste</a></li>
                        <li><a href="/viva-pinata" class="cursor-pointer hover:text-white/75 transition-all ease-in-out duration-200">Viva Piñata</a></li>
                        <li><a href="/a-propos-de-nous" class="cursor-pointer hover:text-white/75 transition-all ease-in-out duration-200">À propos de nous</a></li>
                        <li><a href="/nous-contacter" class="cursor-pointer hover:text-white/75 transition-all ease-in-out duration-200">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="w-full h-full flex-grow mt-7">
        <div class="flex flex-col gap-8 w-full">
            <?php if ($base == $script) : ?>
                <a name="accueil"></a>
                <section class="bg-[url('/header.jpg')] bg-cover bg-center w-full h-full justify-self-center self-center flex justify-center items-center">
                    <div class="absolute inset-x-0 bottom-0 flex flex-col items-center px-4 pb-2 sm:pb-3 md:pb-5 pt-4 gap-2" style="background: linear-gradient(to bottom,rgba(0, 0, 0, 0) 0%,rgba(0, 0, 0, 0.0) 5%,rgba(0, 0, 0, 0.06) 10%,rgba(0, 0, 0, 0.20) 20%,rgba(0, 0, 0, 0.45) 40%,rgba(0, 0, 0, 0.75) 60%,rgba(0, 0, 0, 1) 100%);">
                        <h1 class="text-4xl font-bold text-white text-center">TenderNess</h1>
                        <p class="text-lg text-white text-center">Nées de douceur, conçues avec respect, pour des câlins inoubliables !</p>
                    </div>
                </section>
            <?php endif; ?>
            <?php foreach ($pages as $index => $page) : ?>
                <a name="<?= basename($page, ".php") ?>"></a>
                <section class="w-full h-full justify-self-center self-center flex justify-center items-center">
                    <div class="flex flex-col-reverse gap-12 <?= ($base != $script ? "mt-8" : "") ?>">
                        <div>
                            <?php include_once($page); ?>
                        </div>
                        <h1 class="self-center w-fit text-3xl font-bold text-center cursor-pointer transition-all ease-in-out duration-200"><a href="#<?= basename($page, ".php") ?>"><?= $titre ?></a></h1>
                    </div>
                </section>
            <?php endforeach; ?>
            <?php if ($base == $script) $titre = "Accueil" ?>
        </div>
    </main>
    <footer>
        <div class="bg-black text-white pt-4 pb-4 flex flex-col items-center text-center">
            <p><span>🄯</span> <?= (intval(date("Y")) == 2025 ? "2025" : "2025 - " . date("Y")) ?> <a class="hover:text-white/75 transition-all ease-in-out duration-200" href="https://github.com/AmandAlexandrePro/tenderness" target="_blank">TenderNess</a> - <a class="hover:text-white/75 transition-all ease-in-out duration-200" href="https://www.mozilla.org/en-US/MPL/2.0" target="_blank">Mozilla Public License 2.0</a></p>
        </div>
    </footer>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            document.title = "TenderNess - <?= $titre ?>"
        })
    </script>
</body>

</html>