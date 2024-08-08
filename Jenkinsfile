pipeline {
    agent any
    environment {
        SONAR_HOST_URL = credentials('sonar-host-url')
        SONAR_TOKEN = credentials('sonar-token')
    }
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/NXC-DiepNV/test_sonar.git'
            }
        }
        // stage('Install Dependencies') {
        //     steps {
        //         sh 'composer update --no-ansi --no-interaction --no-progress'
        //     }
        // }
        // stage('Run Tests') {
        //     steps {
        //         sh 'vendor/bin/phpunit --coverage-clover=coverage.xml'
        //     }
        // }
        stage('SonarQube Analysis') {
            environment {
                SCANNER_HOME = tool 'sonarqube-scanner'
            }
            steps {
                withSonarQubeEnv('sonarqube') {
                    sh '''$SCANNER_HOME/bin/sonar-scanner \
                        -Dsonar.host.url=${SONAR_HOST_URL} \
                        -Dsonar.login=${SONAR_TOKEN}'''
                }
            }
        }
    }
    post {
        success {
            echo 'Build and analysis completed successfully.'
        }
        failure {
            echo 'Build or analysis failed.'
        }
    }
}
