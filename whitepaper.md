
Abstract
This white paper explores the development of a deep learning–based plant identification system for automated agricultural weed control. Using a dataset of 15,336 annotated soybean field images, four convolutional neural network (CNN) architectures—Baseline CNN, ResNet-50, EfficientNetB0, and MobileNetV2—were trained and evaluated to classify four categories: broadleaf weeds, grass weeds, soil, and soybean crops. To address severe class imbalance, especially in broadleaf samples, the study applied synthetic image generation, aggressive data augmentation, and class weighting. MobileNetV2 emerged as the top performer for deployment feasibility, with EfficientNetB0 achieving the highest overall accuracy. The final solution integrates into a web application with automated updates, enabling real-time classification and a planned cost savings calculator for farmers.

Business Background
Weed management is a costly and labor-intensive challenge in agriculture, with annual expenditures exceeding $900 million in California alone. Weeds can reduce crop yields by up to 50% while increasing herbicide use, contributing to environmental degradation and herbicide resistance. Traditional control methods rely heavily on manual labor and chemical applications, both of which face sustainability and cost pressures. Advances in AI-powered computer vision offer scalable solutions for identifying and managing weeds with greater efficiency and precision.

Problem Statement
Farmers face increasing difficulty in managing weeds efficiently due to labor shortages, escalating input costs, and the ecological risks of herbicide overuse. Current weed identification systems lack robustness under real-world field variability. There is a need for an accurate, lightweight, and deployable model capable of distinguishing weeds from crops in diverse conditions to enable automated, targeted weed control.

Summary of the Findings
Baseline CNN: Provided a benchmark and improved with targeted augmentation (broadleaf recall 0.71 → 0.86).


EfficientNetB0: Initially overfit to soybean; after fine-tuning and weighting, achieved >99% accuracy across all classes.


MobileNetV2: Achieved 99% accuracy with minimal misclassifications; best suited for edge deployment.


ResNet-50: Strong results but computationally heavier and less effective at distinguishing broadleaf from grass.
 The combination of aggressive augmentation, oversampling, and class weighting proved essential for addressing class imbalance and improving generalization.



Business Questions
Which CNN architecture provides the best balance of accuracy, inference speed, and deployment feasibility for agricultural weed detection?


How can model performance be improved for underrepresented classes such as broadleaf weeds?


What preprocessing and training strategies maximize generalization in varied field conditions?


How can the system be deployed in a way that integrates seamlessly into farming operations?



Scope of Analysis
In Scope:
Classification of broadleaf, grass, soil, and soybean in still images.


Evaluation of four CNN architectures on the same dataset.


Data preprocessing, augmentation, and class imbalance handling.


Development of a proof-of-concept web application.


Out of Scope:
Real-time object detection or localization.


Integration with robotic weeding machinery in this phase.


Video stream classification and region-specific weed datasets.



Approach
The dataset from Kaggle (“Weed Detection in Soybean Crops”) was preprocessed to standardize images at 224×224 pixels with zero-padding. Class imbalance was addressed using oversampling, aggressive augmentation (rotation, flips, brightness shifts, zoom), and class weighting. Four models were trained using a stratified 80:20 train-validation split. Performance was measured via accuracy, precision, recall, F1-score, and confusion matrices. Top-performing models were integrated into a PHP-based web application that updates automatically from the project’s GitHub repository.

Limitations
Class imbalance remains a challenge despite augmentation.


Models trained on this dataset may not generalize perfectly to other crops or weed species.


Deployment scenarios with variable lighting, occlusion, or unseen weed types may require retraining or additional fine-tuning.


Current system is limited to classification; it does not localize weeds in images.



Solution Details
MobileNetV2 and EfficientNetB0 demonstrated the highest viability for real-world deployment. MobileNetV2 is particularly suited for edge devices due to its small size and fast inference, while EfficientNetB0 achieved near-perfect accuracy through fine-tuning and class weighting. The web application enables stakeholders to visualize model performance, access updated confusion matrices, and (in the future) calculate estimated labor cost savings. The automated GitHub integration ensures the system remains current without manual intervention.

Concluding Summary
This project demonstrates that lightweight CNN architectures, combined with targeted augmentation and class weighting, can achieve high accuracy in weed vs. crop classification under varied field conditions. MobileNetV2, in particular, offers a strong balance of performance and efficiency for field deployment, enabling cost-effective, sustainable weed control. The integration into a web platform bridges the gap between research and practical application.

Call to Action
Agricultural technology stakeholders, farm managers, and precision agriculture companies are encouraged to explore collaborations for field trials, expand the dataset to include region-specific weeds, and integrate object detection for precise weeding. Visit the project repository or contact the authors to discuss partnership opportunities and deployment strategies.


