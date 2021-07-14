#!/usr/bin/env bash

source ../common-functions.sh
set -e

IMAGE_REPO=`get_container_repo_name $@`
IMAGE_NAME=php-ci-runner
IMAGE_TAG=`git rev-parse --short HEAD`

if [ -z "$IMAGE_REPO" ]
then
    echo "Repo not defined, e.g, --repo=aws | gitlab" && exit 1
fi


cd "$(dirname "${BASH_SOURCE[0]}")" \
&& docker build -t "local-${IMAGE_NAME}" . \
&& docker tag "local-${IMAGE_NAME}" "${IMAGE_REPO}/${IMAGE_NAME}:${IMAGE_TAG}" \
&& docker tag "local-${IMAGE_NAME}" "${IMAGE_REPO}/${IMAGE_NAME}:latest" \
&& docker push "${IMAGE_REPO}/${IMAGE_NAME}:${IMAGE_TAG}" \
&& docker push "${IMAGE_REPO}/${IMAGE_NAME}:latest"
