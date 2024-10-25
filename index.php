<?php
// Étape 1 
$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

$produits = [$produit1, $produit2, $produit3];

// Étape 5
function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}

// Étape 2 & Bonus 
$totalPanier = 0;

echo "<h2>Panier</h2>";
echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Sous-total</th>
        </tr>";

foreach ($produits as $produit) {
    $sousTotal = calculerSousTotal($produit);  // Utilise la fonction pour calculer le sous-total
    $totalPanier += $sousTotal;
    echo "<tr>
            <td>{$produit['nom']}</td>
            <td>{$produit['prix']} €</td>
            <td>{$produit['quantite']}</td>
            <td>$sousTotal €</td>
        </tr>";
}

echo "<tr>
        <td colspan='3'><strong>Total du panier</strong></td>
        <td><strong>$totalPanier €</strong></td>
      </tr>";
echo "</table>";

// Étape 4 
if ($totalPanier > 50) {
    $reduction = $totalPanier * 0.10;
    $totalPanier -= $reduction;
    echo "<p>Réduction de 10% appliquée : -$reduction €</p>";
}

echo "<p>Montant final : $totalPanier €</p>";
?>