pipeline {
    agent any
    environment {
        NEW_VERSION ='1.3.32'
    }

    stages {
        stage('build') {
            steps {
                echo 'this is build stage'
                echo 'this ${NEW_VERSION}'
                
            }
        }
        stage('test') {
            steps {
                echo 'this is test stage'
            }
        }
        stage('deployment') {
            steps {
                echo 'this is deployment stage'
            }
            post 
            {
                always
                {
                emailext body: 'this is your build state', subject: 'build status', to: 'nagrajumote@gmail.com'    
                }
            }
            }
        }
    }
