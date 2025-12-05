pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/wahyusani10/project-php.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                echo 'Install dependencies...'
            }
        }
    }
}
