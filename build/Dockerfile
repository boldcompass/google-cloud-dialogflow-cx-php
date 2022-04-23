FROM ubuntu:18.04

RUN apt update && apt install apt-transport-https curl gnupg git software-properties-common pkg-config libxml2-dev libssl-dev libcurl4-openssl-dev openjdk-11-jdk zip -y

RUN apt-add-repository ppa:deadsnakes/ppa -y \
    && curl -fsSL https://bazel.build/bazel-release.pub.gpg | gpg --dearmor >bazel-archive-keyring.gpg \
    && mv bazel-archive-keyring.gpg /usr/share/keyrings \
    && echo "deb [arch=amd64 signed-by=/usr/share/keyrings/bazel-archive-keyring.gpg] https://storage.googleapis.com/bazel-apt stable jdk1.8" | tee /etc/apt/sources.list.d/bazel.list

RUN apt update && DEBIAN_FRONTEND=noninteractive apt install -y --no-install-recommends python3.10 python3.10-dev python3.10-distutils bazel
RUN curl -sS https://bootstrap.pypa.io/get-pip.py | python3.10

RUN rm /usr/bin/python3 && ln -s /usr/bin/python3.10 /usr/bin/python3

RUN git clone https://github.com/googleapis/googleapis.git googleapis

RUN cd googleapis && bazel build //google/cloud/dialogflow/cx/v3:google-cloud-dialogflow-cx-v3-php

WORKDIR /googleapis
