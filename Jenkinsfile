pipeline {
    agent any
    stages {
        stage('Checkout') {
    git branch: 'main', url: 'https://github.com/wahyusani10/project-php.git'
}

        }
        stage('Install Dependencies') {
            steps { powershell 'composer install' }
        }
        stage('Run Unit Tests') {
            steps { powershell 'vendor\\bin\\phpunit' }
        }
        stage('Run App') {
            steps { powershell 'php index.php' }
        }
    }
}
