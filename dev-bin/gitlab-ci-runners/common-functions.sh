#!/usr/bin/env sh

get_container_repo_name() {
    local IMAGE_REPO=
    local REPO=

    for i in "$1"
    do
        case $i in
            -r=*|--repo=*)
                REPO="${i#*=}";
                if [ ${REPO} = "gitlab" ]
                then
                    # developer should login to gitlab container repository before running this script
                    # docker login registry.gitlab.com -u <USERNAME> -p <GITLAB_PERSONAL_TOKEN_DOCKER>
                    # Minimum gitlab access token scope to be:
                    # *  For read (pull) access, read_registry.
                    # *  For write (push) access, write_registry.
                    IMAGE_REPO=registry.gitlab.com/msts-enterprise/devx/integrations/trevipay-php-library
                elif [ ${REPO} = "aws" ]
                then
                    IMAGE_REPO=434875166128.dkr.ecr.us-east-1.amazonaws.com/caasdevx/php
                fi;
                shift # past argument=value
            ;;
            *)
            ;;
        esac
    done
    echo "$IMAGE_REPO"
}
