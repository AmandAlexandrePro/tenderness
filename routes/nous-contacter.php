<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<?php $titre = "Nous contacter" ?>
<form class="relative shadow-lg rounded-lg p-8 inline-grid grid-cols-2 gap-8 mb-12" action="mailto:contact@tenderness.com" method="GET" onsubmit="function submit () {this.subject.value = `${this.nom.value} - ${this.subject.value}`;return true}">
    <?php foreach (
        [
            [
                "id" => "nom",
                "type" => "text",
                "titre" => "Nom",
                "placeholder" => "Votre nom",
                "full" => false,
                "multiline" => false
            ],
            [
                "id" => "cc",
                "type" => "email",
                "titre" => "Email",
                "placeholder" => "votre@email.com",
                "full" => false,
                "multiline" => false
            ],
            [
                "id" => "subject",
                "type" => "text",
                "titre" => "Sujet",
                "placeholder" => "Sujet de votre message",
                "full" => true,
                "multiline" => false
            ],
            [
                "id" => "body",
                "titre" => "Message",
                "placeholder" => "Votre message...",
                "full" => true,
                "multiline" => true
            ]
        ] as $composant
    ) : ?>
        <div class="text-white flex flex-col gap-4 <?= ($composant["full"] == true ? "col-span-full" : "") ?>">
            <label class="text-black" htmlFor="<?= $composant["id"] ?>"><?= $composant["titre"] ?></label>
            <?php if ($composant["multiline"] == true) : ?>
                <textarea class="relative bg-black rounded-lg p-4" name="<?= $composant["id"] ?>" placeholder="<?= $composant["placeholder"] ?>" rows="6" required></textarea>
            <?php else : ?>
                <input class="relative bg-black rounded-lg p-4" type="<?= $composant["type"] ?>" name="<?= $composant["id"] ?>" placeholder="<?= $composant["placeholder"] ?>" required />
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    <div class="col-span-full">
        <input class="w-full cursor-pointer rounded-lg p-4 bg-black text-white transition-all duration-200 ease-in-out shadow-none hover:shadow-[0_0_15px_2px_rgba(0,0,0,0.55)]" type="submit" value="Envoyer le message">
    </div>
</form>