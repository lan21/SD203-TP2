# TP2 PHP
Author :  RAKOTOARIVONY Allan

2-2
L'application est vulnérable aux inections HTML. Pour éviter cela, il faut encoder tous les caractères spéciaux HTML avec la fonction htmlspecialchars dans le forumlaire de création de news. On peut aussi utiliser la methode $this->security->xss_clean() de CodeIgniter

