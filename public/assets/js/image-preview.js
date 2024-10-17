function previewImage(event, previewId) {
                                            var input = event.target;
                                            var preview = document.getElementById(previewId);
                                            var reader = new FileReader();

                                            reader.onload = function() {
                                                preview.src = reader.result;
                                            };

                                            if (input.files && input.files[0]) {
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
