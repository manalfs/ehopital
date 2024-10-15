$(document).ready(function() {
    // Écouter l'événement de soumission du formulaire
    $('form').on('submit', function(e) {
        e.preventDefault(); // Empêcher la soumission du formulaire par défaut
        
        // Récupérer les données du formulaire
        var formData = $(this).serialize();
        
        // Envoyer les données du formulaire via une requête AJAX
        $.ajax({
            url: 'enregistrer_modif.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Afficher un message de succès
                    alert('Le rendez-vous a été modifié avec succès.');
                    
                    // Réactualiser les informations du rendez-vous sur la page si nécessaire
                    // ...
                } else {
                    // Afficher un message d'erreur
                    alert('Erreur lors de la modification du rendez-vous.');
                }
            },
            error: function() {
                // Afficher un message d'erreur en cas d'échec de la requête AJAX
                alert('Erreur lors de la requête AJAX.');
            }
        });
    });
});
