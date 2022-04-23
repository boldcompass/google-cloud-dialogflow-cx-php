# Remove old files

Remove-Item '../src' -Recurse
Remove-Item '../tests' -Recurse
Remove-Item '../metadata' -Recurse

docker build . -t guidehub-bazel-build

#docker run -it --entrypoint /bin/bash guidehub-bazel-build
docker run -d --name guidehub-bazel-build-cont guidehub-bazel-build sleep 1
docker cp "guidehub-bazel-build-cont:/googleapis/bazel-bin/google/cloud/dialogflow/cx/v3/google-cloud-dialogflow-cx-v3-php.tar.gz" .

# Extract
tar -xvzf .\google-cloud-dialogflow-cx-v3-php.tar.gz
mkdir ../src
Move-Item -Path ./google-cloud-dialogflow-cx-v3-php/proto/src/GPBMetadata/Google/Cloud/Dialogflow/Cx/ -Destination ../metadata
Move-Item -Path ./google-cloud-dialogflow-cx-v3-php/tests -Destination ../tests
Move-Item -Path ./google-cloud-dialogflow-cx-v3-php/src/* -Destination ../src/V3
Move-Item -Path ./google-cloud-dialogflow-cx-v3-php/proto/src/Google/Cloud/Dialogflow/Cx/V3/* -Destination ../src/V3

# Cleaning up
docker stop guidehub-bazel-build-cont
docker rm guidehub-bazel-build-cont
docker image rm guidehub-bazel-build
Remove-Item google-cloud-dialogflow-cx-v3-php.tar.gz
Remove-Item google-cloud-dialogflow-cx-v3-php  -Recurse
