<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<?php $titre = "À propos de nous" ?>
<script src="/jorg-chart-1.0.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<div class="flex flex-col">
	<?php foreach (
		[
			[
				"image" => "/about-us/notre_histoire.jpg",
				"id" => "Notre histoire",
				"titre" => "Notre histoire",
				"description" => "Chez TenderNess, nous croyons que chaque peluche mérite d’être plus qu’un simple jouet.\n\nElle doit être un compagnon éco-responsable, doux pour le cœur et pour la planète.\n\nTout a commencé avec une simple idée : créer des peluches en harmonie avec la nature, fabriquées avec des matériaux écologiques, mais aussi chargées de tendresse et d’histoire."
			],
			[
				"image" => "/about-us/nos_valeurs.jpg",
				"id" => "Nos valeurs",
				"titre" => "Nos valeurs :\nÉthique, Écologique et Éducatif",
				"description" => "Nous nous engageons à proposer des peluches fabriquées de manière éthique et durable.\n\nChaque peluche est conçue avec des matériaux 100% bio et recyclés.\n\nDe plus, nous mettons un point d'honneur à soutenir des projets écoresponsables et à faire notre part pour la protection de la faune et de la flore."
			],
			[
				"image" => "/about-us/nos_engagements.jpg",
				"id" => "Nos engagements",
				"titre" => "Nos engagements :",
				"description" => "<span>🧸</span> Matériaux écologiques : Coton bio, fibres recyclées, rembourrage durable.\n\n<span>🌍</span> Fabrication éthique : Ateliers responsables avec des conditions de travail respectueuses.\n\n<span>💚</span> Soutien à des causes sociales et environnementales : Pour chaque peluche achetée, nous reversons 1€ à des associations de protection animale et plantons un arbre pour chaque collection vendue."
			],
			[
				"image" => "/about-us/equipe_derriere.jpg",
				"id" => "L'équipe derrière",
				"titre" => "L’équipe derrière TenderNess",
				"description" => "Derrière chaque peluche, il y a une équipe passionnée. Nous sommes une famille de <span id=\"teamCount\" style=\"font-family: inherit;\"></span> personnes, réunies par une mission commune : créer des compagnons tout doux, respectueux de l’environnement et porteurs de valeurs fortes.\n\n<span>🧵</span> Des créateurs engagés : Du design à la couture, chaque membre apporte son savoir-faire pour donner vie à des peluches uniques.\n\n<span>💚</span> Une équipe soudée : Chacun de nous met son cœur dans cette aventure, convaincu qu’un petit geste peut faire une grande différence.\n\nEnsemble, nous façonnons un monde plus doux, une peluche à la fois."
			],
			[
				"image" => "/about-us/avis_clients.jpg",
				"id" => "Avis clients",
				"titre" => "Ce que nos clients disent de nous",
				"description" => "« J’ai acheté une peluche pour ma fille, elle est tellement douce !\nCe que j’aime le plus, c’est que je sais qu’elle est fabriquée avec des matériaux durables et qu’elle aide aussi à une cause qui me tient à cœur. »\n— Claire, maman de Léa\n\n« Une peluche si mignonne et tellement douce, mon fils l'adore !\nJe suis ravi de soutenir une entreprise qui pense à la planète. »\n— Paul, papa de Lucas"
			],
			[
				"image" => "/about-us/notre_impact.jpg",
				"id" => "Notre impact",
				"titre" => "Notre impact jusqu'à présent",
				"description" => "Grâce à vous, nous avons déjà planté 1 000 arbres et aidé plus de 500 animaux grâce à nos dons.\n\nChaque peluche vendue contribue à faire une différence.\n\nNous vous remercions de soutenir notre aventure et de participer à un changement positif."
			],
			[
				"image" => "/about-us/pourquoi_adopter_peluche_ethique.jpg",
				"id" => "Pourquoi adopter une peluche éthique",
				"titre" => "Pourquoi adopter une peluche éthique ?",
				"description" => "Nos peluches ne sont pas simplement des jouets, elles sont des acteurs du changement.\n\nEn adoptant une peluche de TenderNess, vous choisissez un produit qui respecte l’environnement, mais aussi une cause sociale.\n\nVous donnez une seconde vie à la planète, une peluche à la fois."
			]
		] as $index => $categorie
	) : ?>
		<a name="<?= $categorie["id"] ?>"></a>
		<div class="w-full h-full justify-self-center self-center flex justify-center items-center">
			<div class="flex-wrap md:flex-nowrap flex flex-row<?= $index % 2 != 0 ? "-reverse" : "" ?>">
				<div class="relative md:w-3/5 w-full <?= $categorie["id"] == "L'équipe derrière" ? "cursor-zoom-in" : "" ?>" <?= $categorie["id"] == "L'équipe derrière" ? "onclick=\"openModal()\"" : "" ?>>
					<img <?= $categorie["id"] == "L'équipe derrière" ? "id=\"organigramme\"" : "" ?> class="object-cover h-full" src="<?= $categorie["image"] ?>" alt="Image de <?= $categorie["id"] ?>">
					<?php if ($categorie["id"] == "L'équipe derrière"): ?>
						<div class="absolute inset-0 bg-black/75 opacity-0 hover:opacity-100 transition-opacity duration-300 flex justify-center items-center">
							<div class="pointer-events-none">
								<h2 class="text-white text-center text-4xl font-semibold">Cliquez ici pour voir notre organigramme</h2>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="md:w-2/4 w-full bg-black text-white">
					<div class="py-8 md:px-8 flex flex-col h-full justify-center gap-8">
						<h2 class="text-center text-4xl font-semibold"><?= nl2br($categorie["titre"]) ?></h2>
						<p class="text-center sm:text-start"><?= nl2br($categorie["description"]) ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<div id="imageModal" class="fixed inset-0 bg-black/75 hidden justify-center items-center place-content-center z-50 p-20 cursor-zoom-out" onclick="closeModal(event)">
	<a id="modalDownload" class="absolute top-0 right-0 text-white text-3xl mt-3 mr-5 hidden" target="_blank"><i class="fa-solid fa-download"></i></a>
	<div class="relative h-full w-full">
		<div id="modalImageContainer" class="h-full w-full max-h-full max-w-full flex justify-center items-center">
			<iframe id="modalImage" class="max-h-full max-w-full w-full h-full object-contain min-w-min" frameborder="0" scrolling="auto"></iframe>
		</div>
	</div>
</div>
<script>
	const orga = [{
			group: "direction",
			groupName: "Direction",
			nodes: [{
					id: "Node1",
					title: "Alice Morel",
					text: [
						"Directrice Générale (DG)",
						"5 ans d'ancienneté",
						"Définit la vision et la stratégie globale de l'entreprise",
						"Supervise les équipes et fixe les objectifs de croissance",
						"Assure le développement et la pérennité du site e-commerce"
					]
				},
				{
					id: "Node1.1",
					title: "Thomas Lefèvre",
					text: [
						"Directeur des Opérations",
						"4 ans d'ancienneté",
						"Optimise les processus de production et logistique",
						"Supervise la gestion des stocks et des expéditions",
						"Veille à la satisfaction client et à l'amélioration continue"
					]
				}
			]
		},
		{
			group: "logistique",
			groupName: "Logistique & Gestion des Stocks",
			parent: "direction",
			nodes: [{
					id: "Node1.1.1",
					title: "Maxime Durand",
					text: [
						"Responsable Logistique",
						"3 ans d'ancienneté",
						"Supervise l’approvisionnement et la gestion des stocks",
						"Optimise la chaîne logistique pour des livraisons rapides"
					]
				},
				{
					id: "Node1.1.1.1",
					title: "Sophie Lambert",
					text: [
						"Gestionnaire des Stocks",
						"2 ans d'ancienneté",
						"Contrôle l’état des stocks et passe les commandes aux fournisseurs",
						"Assure la bonne réception et organisation des produits"
					]
				}
			]
		},
		{
			group: "controle_qualite",
			groupName: "Contrôle Qualité & Expédition",
			parent: "direction",
			nodes: [{
					id: "Node1.1.2",
					title: "Vincent Lemoine",
					text: [
						"Responsable Contrôle Qualité",
						"5 ans d'ancienneté",
						"Vérifie la conformité des peluches avant leur mise en stock",
						"S’assure que les normes éthiques et écologiques sont respectées"
					]
				},
				{
					id: "Node1.1.2.1",
					title: "Emma Roux",
					text: [
						"Responsable Emballage",
						"3 ans d'ancienneté",
						"Emballe les peluches dans des matériaux écologiques",
						"Gère l’envoi des commandes clients"
					]
				}
			]
		},
		{
			group: "developpement_it",
			groupName: "Développement Web & IT",
			parent: "direction",
			nodes: [{
					id: "Node1.2",
					title: "Amand Alexandre",
					text: [
						"Développeur Full Stack",
						"6 ans d'ancienneté",
						"Développe et maintient le site e-commerce",
						"Optimise l'expérience utilisateur et la rapidité du site",
						"Développe l'interface utilisateur et l’optimise pour mobile",
						"Améliore le design et l’accessibilité du site",
						"Implémente les fonctionnalités et API nécessaires"
					]
				},
				{
					id: "Node1.2.1",
					title: "Émilie Roche",
					text: [
						"Responsable IT & Cybersécurité",
						"5 ans d'ancienneté",
						"Assure la protection des données et la sécurité du site",
						"Met en place les solutions de paiement sécurisées",
						"Gère les bases de données et la sécurité du site"
					]
				},
				{
					id: "Node1.2.2",
					title: "Lucie Durand",
					text: [
						"Analyste de Données",
						"2 ans d'ancienneté",
						"Analyse les données de vente et le comportement des clients",
						"Optimise la conversion"
					]
				},
				{
					id: "Node1.2.3",
					title: "Julien Lefèvre",
					text: [
						"Spécialiste en Expérience Client (UX/UI)",
						"3 ans d'ancienneté",
						"Améliore l’expérience utilisateur sur le site web"
					]
				}
			]
		},
		{
			group: "marketing",
			groupName: "Marketing & Communication",
			parent: "direction",
			nodes: [{
					id: "Node1.3",
					title: "Léa Fontaine",
					text: [
						"Responsable Marketing Digital",
						"4 ans d'ancienneté",
						"Développe et met en œuvre la stratégie marketing",
						"Analyse les performances et optimise la conversion"
					]
				},
				{
					id: "Node1.3.1",
					title: "Pierre Martin",
					text: [
						"Community Manager",
						"3 ans d'ancienneté",
						"Gère les réseaux sociaux et l’engagement client",
						"Anime la communauté et répond aux avis/commentaires"
					]
				},
				{
					id: "Node1.3.2",
					title: "Amélie Petit",
					text: [
						"Rédactrice Web & SEO",
						"2 ans d'ancienneté",
						"Rédige les descriptions des produits et les articles de blog",
						"Optimise le référencement naturel du site"
					]
				},
				{
					id: "Node1.3.3",
					title: "Sophie Girard",
					text: [
						"Graphiste",
						"3 ans d'ancienneté",
						"Crée des visuels attractifs pour le site web"
					]
				}
			]
		},
		{
			group: "fabrication",
			groupName: "Fabrication des Peluches",
			parent: "direction",
			nodes: [{
					id: "Node1.4",
					title: "Antoine Leroy",
					text: [
						"Designer Produit",
						"4 ans d'ancienneté",
						"Conçoit les modèles de peluches",
						"Travaille avec les fournisseurs sur la qualité et les matériaux"
					]
				},
				{
					id: "Node1.4.1",
					title: "Sophie Renard",
					text: [
						"Responsable Atelier de Fabrication",
						"5 ans d'ancienneté",
						"Supervise la production des peluches",
						"Vérifie la qualité des matières premières",
						"Coordonne les artisans et couturiers"
					]
				},
				{
					id: "Node1.4.1.1",
					title: "Jean-Luc Dupont",
					text: [
						"Couturier Spécialiste",
						"6 ans d'ancienneté",
						"Assemble les peluches avec précision",
						"Travaille sur des coutures complexes et personnalisations"
					]
				},
				{
					id: "Node1.4.1.2",
					title: "Mélanie Girard",
					text: [
						"Couturière & Remplisseuse",
						"3 ans d'ancienneté",
						"Remplit les peluches avec des matériaux écologiques",
						"Fait les finitions (broderies, détails esthétiques)",
						"Assure le contrôle qualité avant expédition"
					]
				},
				{
					id: "Node1.4.1.3",
					title: "Clara Masson",
					text: [
						"Couturière & Brodeuse",
						"2 ans d'ancienneté",
						"Réalise les broderies et personnalisations",
						"Assure la solidité des coutures"
					]
				},
				{
					id: "Node1.4.1.4",
					title: "Hugo Perrin",
					text: [
						"Assistant Couture",
						"1 an d'ancienneté",
						"Aide à la préparation des tissus et des patrons",
						"Vérifie la conformité des pièces avant assemblage"
					]
				}
			]
		},
		{
			group: "remplissage",
			groupName: "Remplissage & Finitions",
			parent: "fabrication",
			nodes: [{
					id: "Node1.4.2",
					title: "Marion Lefebvre",
					text: [
						"Responsable Remplissage",
						"4 ans d'ancienneté",
						"Gère le remplissage des peluches",
						"Vérifie la densité et la texture des matières utilisées"
					]
				},
				{
					id: "Node1.4.2.1",
					title: "Léa Durand",
					text: [
						"Opératrice de Finitions",
						"2 ans d'ancienneté",
						"Vérifie la qualité et l’apparence des peluches avant expédition",
						"Ajoute les éléments de finition (yeux, accessoires)"
					]
				},
				{
					id: "Node1.4.2.2",
					title: "Camille Bernard",
					text: [
						"Assistante Finitions",
						"1 an d'ancienneté",
						"Vérifie les derniers détails et effectue les retouches"
					]
				}
			]
		},
		{
			group: "service_client",
			groupName: "Service Client",
			parent: "direction",
			nodes: [{
					id: "Node1.5",
					title: "Kevin Bernard",
					text: [
						"Responsable Service Client",
						"3 ans d'ancienneté",
						"Coordonne l’équipe du service client",
						"Gère les réclamations et améliore la satisfaction client"
					]
				},
				{
					id: "Node1.5.1",
					title: "Julie Mercier",
					text: [
						"Conseillère Clientèle",
						"2 ans d'ancienneté",
						"Répond aux questions des clients et traite les demandes",
						"Gère les retours et remboursements"
					]
				}
			]
		},
		{
			group: "ressources_humaines",
			groupName: "Ressources Humaines",
			parent: "direction",
			nodes: [{
				id: "Node1.6",
				title: "Marie Dupont",
				text: [
					"Responsable RH",
					"5 ans d'ancienneté",
					"Gère le recrutement, la formation, le bien-être des employés",
					"Assure le respect des lois et régulations"
				]
			}]
		},
		{
			group: "juridique",
			groupName: "Juridique",
			parent: "direction",
			nodes: [{
				id: "Node1.7",
				title: "Paul Martin",
				text: [
					"Juriste",
					"4 ans d'ancienneté",
					"S’assure que l’entreprise respecte les lois et régulations",
					"Gère les contrats et protège la propriété intellectuelle"
				]
			}]
		},
		{
			group: "achats",
			groupName: "Achats",
			parent: "direction",
			nodes: [{
				id: "Node1.8",
				title: "Clara Bernard",
				text: [
					"Responsable des Achats",
					"3 ans d'ancienneté",
					"Gère les relations avec les fournisseurs et négocie les contrats"
				]
			}]
		}
	];
	let init = false;

	window.addEventListener("DOMContentLoaded", function () {
		let teamCount = document.getElementById("teamCount");
		if (teamCount) teamCount.innerText = orga.reduce(function (accumulator, currentValue) {
			return accumulator += currentValue["nodes"].length
		}, 0)
	});

	function openModal() {
		document.getElementById("imageModal")?.classList.remove("hidden");
		if (init != true) {
			let organigramme = document.getElementById("organigramme"),
				modalImage = document.getElementById("modalImage"),
				modalDownload = document.getElementById("modalDownload");
			if (organigramme && modalImage && modalDownload) {
				let output = document.createElement("svg"),
					chart = new JSVGOrganisationChart(output);
				for (const groupData of orga) {
					chart.addGroup(
						groupData.parent,
						groupData.group,
						groupData.groupName
					);
					for (const nodeData of groupData.nodes) {
						chart.addNode(
							groupData.group,
							nodeData.parent,
							nodeData.id,
							nodeData.title,
							nodeData.text
						)
					}
				};
				modalImage.src = "about:blank";
				modalImage.onload = () => {
					chart.drawChart();
					const iframeDoc = modalImage.contentDocument || modalImage.contentWindow.document;
					iframeDoc.open();
					iframeDoc.write(`<html><body>${output.outerHTML}</body></html>`);
					html2canvas(iframeDoc.body).then(function(canvas) {
						modalDownload.href = canvas.toDataURL("image/png");
						modalDownload.classList.remove("hidden");
						iframeDoc.close();
						init = true
					})
				}
			}
		}
	};

	function closeModal(event) {
		if (event.target == event.currentTarget) document.getElementById("imageModal")?.classList.add("hidden")
	}
</script>