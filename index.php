<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayan Chattaoui</title>
    <?php $successMessage = $_GET['success'] ?? null; ?>
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" href="limg/logo.png">
    <meta property="og:description" content="Découvrez les projets et compétences de Rayan Chattaoui, Développeur Fullstack.">
    <meta property="og:image" content="https://rayanchattaoui.com/img/logo.png">
    <meta property="og:type" content="website">
    <meta name="google-site-verification" content="ozO7-CTwsNgU-GcCi49T_9FHuibIMEc2EXoLHf5ZShc" />    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function closeModal() {
            document.getElementById('contactModal').classList.add('hidden');
        }

        window.onload = () => {
            <?php if ($successMessage): ?>
                closeModal();
                const notif = document.createElement("div");
                notif.textContent = "<?= htmlspecialchars($successMessage) ?>";
                notif.className = "fixed top-5 right-5 bg-green-500 text-white px-6 py-3 rounded shadow-lg z-[999]";
                document.body.appendChild(notif);
                setTimeout(() => notif.remove(), 4000);
            <?php endif; ?>
        };
    </script>
<body>
    <header>
        <nav class="max-w-6xl mx-auto flex items-center justify-between ">
            <!-- Logo -->
            <a href="index.html">
                <img src="img/logo.png" alt="Logo" class="w-12">
            </a>
    
            <!-- Menu -->
            <ul class="flex space-x-8 text-lg text-white">
                <li><a href="projet.html" class="hover:text-blue-400 transition">Projets</a></li>
                <li><a href="#" onclick="alert('Cette section est en cours de création.')" class="hover:text-blue-400 transition cursor-pointer">Blog</a></li>
                <li><a href="contact.html" class="hover:text-blue-400 transition mr-3">Contact</a></li>
            </ul>
        </nav>
        <section class="flex flex-col mt-80 justify-center gap-4  items-center">
            <img src="img/Rayan.jpg" alt="Photo de Rayan" class="w-40 h-40 rounded-full shadow-lg">
            <h1 class="text-3xl flex items-center ">Rayan Chattaoui</h1>
        <section class="flex ml-2 space-x-4">
        <a href="https://github.com/Aiglator" target="_blank" rel="noopener noreferrer" title="Voir mon GitHub" alt="Url Github">
        <button class="flex items-center space-x-2 rounded-lg border-white border px-5 py-2 hover:bg-white hover:text-gray-900 transition">
            <span class="pr-3 p-2">GitHub</span>
            <img src="img/github.png" alt="GitHub" class="w-6 bg-white rounded-lg">
        </button>
    </a>
    <a href="https://www.linkedin.com/in/rayan-chattaoui/" target="_blank" rel="noopener noreferrer" title="Voir mon LinkedIn" alt="Url LinkedIn">
        <button class="flex items-center space-x-2 rounded-lg border-white border px-5 py-2 hover:bg-white hover:text-gray-900 transition">
            <span class="pr-2 p-2">LinkedIn</span>
            <img src="img/linkedin.png" alt="LinkedIn" class="w-6">
        </button>
    </a>
            </section>
</section>
<!-- Bouton pour ouvrir la popup -->
<section class="flex justify-center mt-10 pt-10">
    <button onclick="document.getElementById('contactModal').classList.remove('hidden')" 
        class="flex justify-center items-center space-x-2 rounded-lg border border-blue-500 bg-blue-600 px-5 py-2 text-white font-semibold hover:bg-blue-700 hover:border-blue-700 transition duration-300 shadow-lg">
        <span class="mr-3 m-2">Contacter Moi</span>
    </button>
</section>

<!-- Popup (modal) cachée par défaut -->
<div id="contactModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50 text-black">
    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Formulaire de contact</h2>
        <form action="contact.php" method="POST" class="space-y-4">
            <input type="text" name="name" placeholder="Ton nom" required class="w-full border p-2 rounded" />
            <input type="email" name="email" placeholder="Ton email" required class="w-full border p-2 rounded" />
            <input type="text" name="subject" placeholder="Objet du message" required class="w-full border p-2 rounded" />
            <textarea name="message" placeholder="Ton message" required class="w-full border p-2 rounded"></textarea>
    <div class="flex justify-end space-x-2">
            <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Annuler</button>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Envoyer</button>
    </div>
</form>

    </div>
</div>


    </header>
    <main>
        
        <hr class="w-1/2 mx-auto border-t-2 border-blue-500 mt-10 mb-5 animate-expand ">

        <section class="">
            <section class="flex flex-col items-center mt-">
            <h2 class="text-3xl font-bold text-center uppercase tracking-wide 
                bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent 
                hover:underline hover:decoration-blue-400 transition-all duration-300">
                Langage
            </h2>
            </section>
            <marquee class="flex inline-items items-center" direction="left" scrollamount="5">
                <div class="flex items-center space-x-10 justify-around">
                <img src="img/python.png" alt="python" width="100" class="tech-logo">
                <img src="img/typescript.png" alt="typescript" width="100"class="tech-logo">
                <img src="img/html5.png" alt="html5" width="50"class="tech-logo">
                <img src="img/css3.png" alt="css3" width="30"class="tech-logo">
                <img src="img/js.png" alt="javascript" width="40"class="mx-10 tech-logo">
                <img src="img/nodejs.png" alt="nodejs" width="60" class=" mx-10 tech-logo">
                <img src ="img/java.png" alt ="java" width ="60" class=" mx-10 tech-logo"> 
                <img src="img/cy.png" alt="c" width="50" class="tech-logo">
                <img src="img/c++.png" alt="c++" width="50" class="tech-logo">
                <img src="img/csharp.png" alt="csharp" width="50" class="tech-logo">
                </div>
              </marquee>
        </section>
        <section class="mt-10">
            <hr class="w-1/2 mx-auto border-t-2 border-blue-500 mb-5">
        
            <h2 class="text-3xl font-bold text-center uppercase tracking-wide 
                bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent 
                hover:underline hover:decoration-blue-400 transition-all duration-300 mb-10">
                Formation
            </h2>
        
            <ul class="flex flex-col items-center space-y-6 w-full max-w-3xl mx-auto">
                <li class="w-full bg-blue-600 text-white rounded-lg shadow-xl p-6 flex flex-col sm:flex-row items-center justify-between">
                    <div class="flex flex-col text-center sm:text-left">
                        <h2 class="text-2xl font-semibold">EEMI</h2> 
                        <p class="text-sm opacity-80">Septembre 2023 - Juin 2025</p>
                        <p class="text-sm font-light">Chef De Projet Digital</p>
                    </div>
                </li>
            </ul>
        </section>
        
        <section class="">
            <hr class="w-1/2 mx-auto border-t-2 border-blue-500 mt-10 mb-5 animate-expand ">

            <h2 class="text-3xl font-bold text-center uppercase tracking-wide 
            bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent 
            hover:underline hover:decoration-blue-400 transition-all duration-300 mt-10 mb-10">Experience</h2>
            <ul class="flex flex-col items-center space-y-4 w-full max-w-2xl mx-auto">
                <li class="flex justify-center items-center w-full max-w-2xl p-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-lg mx-auto">
                    <section class="flex items-center space-x-6 text-center">
                        <h2 class="text-2xl font-semibold">Braincode</h2> 
                        <p class="text-sm">Juiller 2023 - Août 2023</p>
                        <p class="text-sm">Développeur Fullstack</p>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-sm">Stage</span>
                    </section>
                </li>  
            </ul>
            <br>
            <ul class="flex flex-col items-center space-y-4 w-full max-w-2xl mx-auto">
                <li class="flex justify-center items-center w-full max-w-2xl p-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-lg mx-auto">
                    <section class="flex items-center space-x-6 text-center">
                        <h2 class="text-2xl font-semibold">Cocuisinage/Braincode</h2> 
                        <p class="text-sm">Août 2023 - Février 2025</p>
                        <p class="text-sm">Développeur Fullstack</p>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-sm">Alternance</span>
                    </section>
                </li>
            </ul>
                
        </ul>
        </section>
        <hr class="w-1/2 mx-auto border-t-2 border-blue-500 mb-5 mt-10">
        <h2 class="text-3xl font-bold text-center uppercase tracking-wide bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent hover:underline hover:decoration-blue-400 transition-all duration-300 mt-10"> Mes projets </h2>
        <section class="flex flex-col sm:flex-row sm:flex-wrap justify-center items-stretch gap-6 p-6">

            <!-- Gitdiscover -->
            <section class="flex flex-col justify-between items-center border p-6 rounded-lg shadow-lg max-w-md bg-gray-800 text-white flex-1">
              <div class="flex flex-col items-center">
                <img src="img/gitdiscover_logo.png" alt="Gitdiscover" class="w-40 h-auto rounded-full shadow-md">
                <h3 class="text-2xl font-semibold mt-4">Gitdiscover</h3>
                <p class="text-gray-300 text-center mt-2">
                  Gitdiscover est un outil qui automatise la structuration et le versionnement des projets en intégrant Git et l'IA. 
                  Il repose sur TinyNLP ainsi qu'une IA spécialement conçue pour collaborer avec TinyNLP et Git local, 
                  offrant ainsi une gestion intelligente et optimisée du versionnement.
                </p>
              </div>
              <div class="mt-6">
                <a href="https://github.com/Aiglator/gitdiscover" target="_blank" title="Voir le projet GitHub" rel="noopener noreferrer">
                <button class="rounded-lg border p-2 bg-white hover:bg-blue-400 hover:text-gray-900 transition hover:border-blue-500">
                  <img src="img/github.png" alt="GitHub" class="w-6 h-6">
                </button>
            </a>
              </div>
            </section>
          
            <!-- Apibooks -->
            <section class="flex flex-col justify-between items-center border p-6 rounded-lg shadow-lg max-w-md bg-gray-800 text-white flex-1">
              <div class="flex flex-col items-center">
                <img src="img/logoapibooks.png" alt="Apibooks" class="w-40 h-auto rounded-full shadow-md">
                <h3 class="text-2xl font-semibold mt-4">Apibooks</h3>
                <p class="text-gray-300 text-center mt-2">
                  ApiBooks est un outil léger et intelligent pour documenter automatiquement vos API Express.
                  Basé sur un fichier openapi.json, il génère une interface web moderne pour consulter vos routes — sans créer de fichier HTML statique.
                  L’interface de documentation est directement intégrée à votre serveur via une URL personnalisable, comme /docs ou api.votreapp.com/docs, et reste entièrement responsive et modifiable selon vos besoins.
                  ApiBooks simplifie la vie des développeurs tout en gardant une totale maîtrise sur la présentation et l'accès à la documentation.
                </p>
              </div>
              <div class="flex space-x-4 mt-6">
                <a href="https://github.com/Aiglator/apibooks" target="_blank" rel="noopener noreferrer" title="Voir le projet GitHub">
                    <button class="rounded-lg border p-2 bg-white hover:bg-blue-400 hover:text-gray-900 transition hover:border-blue-500">
                      <img src="img/github.png" alt="GitHub" class="w-6 h-6">
                    </button>
                  </a>
                  
                  <a href="https://www.npmjs.com/package/apibooks" target="_blank" rel="noopener noreferrer" title="Voir le package NPM">
                    <button class="rounded-lg border p-2 bg-white hover:bg-red-700 hover:text-gray-900 transition hover:border-red-700">
                      <img src="img/Npm.png" alt="NPM" class="w-6 h-6">
                    </button>
                  </a>                  
              </div>
            </section>
          
          </section>
          
          
                
    
            

        

    </main>
    <footer class="mb-10">
        <p class="text-center text-gray-500 mt-10"> © Rayan Chattaoui - Tous droits réservés</p>
    </footer>
</body>
</html>
