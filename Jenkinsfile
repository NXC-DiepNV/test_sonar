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
        stage('Setup PHP') {
            steps {
                sh 'sudo apt-get update'
                sh 'sudo apt-get install -y php8.1 php8.1-xml php8.1-mbstring php8.1-zip'
                sh 'php -v'
            }
        }
        stage('Install Dependencies') {
            steps {
                sh 'composer update --no-ansi --no-interaction --no-progress'
            }
        }
        // stage('Run Tests') {
        //     steps {
        //         sh 'vendor/bin/phpunit --coverage-clover=coverage.xml'
        //     }
        // }
        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('SonarQube') {
                    sh "sonar-scanner \
                        -Dsonar.projectKey=NXC-DiepNV_test_sonar_AZEqf7JbBamAUScLB3gf \
                        -Dsonar.sources=./src \
                        -Dsonar.host.url=${SONAR_HOST_URL} \
                        -Dsonar.login=${SONAR_TOKEN} \
                        -Dsonar.php.tests.reportPath=./build/logs/clover.xml \
                        -Dsonar.php.coverage.reportPaths=./coverage.xml"
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
