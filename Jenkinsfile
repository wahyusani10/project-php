pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'YOUR_REPO_URL'
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
