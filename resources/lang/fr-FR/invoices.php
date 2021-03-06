<?php

return [

    'invoice_number'    => 'Numéro de facture',
    'invoice_date'      => 'Date de facturation',
    'total_price'       => 'Prix total',
    'due_date'          => 'Date d\'échéance',
    'order_number'      => 'Numéro de commande',
    'bill_to'           => 'Facture de',

    'quantity'          => 'Quantité',
    'price'             => 'Prix',
    'sub_total'         => 'Sous-total',
    'tax_total'         => 'Taxe totale',
    'total'             => 'Total',

    'item_name'         => 'Nom de marchandise|Noms des marchandises',

    'payment_due'       => 'Paiement dû',
    'paid'              => 'Payé',
    'histories'         => 'Historiques',
    'payments'          => 'Paiements',
    'add_payment'       => 'Ajouter un paiement',
    'mark_paid'         => 'Marquer comme payée',
    'mark_sent'         => 'Marquer comme envoyée',
    'download_pdf'      => 'Télécharger en PDF',
    'send_mail'         => 'Envoyer un Email',

    'status' => [
        'draft'         => 'Brouillon',
        'sent'          => 'Envoyé',
        'viewed'        => 'Vu',
        'approved'      => 'Approuvé',
        'partial'       => 'Partiel',
        'paid'          => 'Payé',
    ],

    'messages' => [
        'email_sent'     => 'La facture a été envoyé avec succès !',
        'marked_sent'    => 'Facture marquée comme envoyée avec succès !',
        'email_required' => 'Ce client ne possède pas d\'email !',
    ],

    'notification' => [
        'message'       => 'Vous recevez cet email car une facture d\'un montant de :amount pour le client :customer arrive à échéance.',
        'button'        => 'Payer maintenant',
    ],

];
