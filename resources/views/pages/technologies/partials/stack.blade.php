@php
$groups=[
['لغات البرمجة',['Python','JavaScript','TypeScript','PHP','C#','Java','Dart','SQL','C++','Bash']],
['تطوير الواجهات',['HTML5','CSS3','JavaScript','TypeScript','React','Next.js','Vue.js','Nuxt.js','Tailwind CSS','Bootstrap']],
['الخلفية والأنظمة',['PHP','Laravel','.NET','ASP.NET Core','Node.js','Express.js','Python','Django','FastAPI','Java','Spring Boot','REST APIs','GraphQL','Microservices']],
['تطبيقات الجوال',['Flutter','Dart','React Native','Kotlin','Swift','Android','iOS','Firebase','Push Notifications']],
['الذكاء الاصطناعي وتعلم الآلة',['Python','Pandas','NumPy','Scikit-learn','TensorFlow','PyTorch','Keras','OpenCV','Hugging Face','LangChain','LLMs','NLP','Computer Vision']],
['تحليل البيانات وذكاء الأعمال',['Python','SQL','Pandas','NumPy','Jupyter','Power BI','Tableau','Excel','Matplotlib','Seaborn','Plotly','Google Analytics']],
['هندسة البيانات',['Apache Spark','PySpark','Apache Kafka','Apache Airflow','dbt','Databricks','Hadoop','ETL / ELT','Data Warehousing','Azure Data Factory','AWS Glue','Snowflake','BigQuery']],
['قواعد البيانات والتخزين',['MySQL','PostgreSQL','SQL Server','Oracle','MongoDB','Redis','Elasticsearch','Firebase','Supabase','SQLite']],
['السحابة وDevOps',['AWS','Microsoft Azure','Google Cloud','Docker','Kubernetes','Git','GitHub Actions','GitLab CI/CD','Jenkins','Terraform','Nginx','Linux','Monitoring']],
['الاختبارات والجودة والأمان',['PHPUnit','Pest','Jest','Cypress','Playwright','Postman','Swagger','SonarQube','OWASP','Penetration Testing','Automated Testing']],
];
@endphp
<section class="tech-stack"><div class="container mx-auto px-margin-desktop">@foreach($groups as $group)<article class="tech-group reveal"><h2>{{ $group[0] }}</h2><div>@foreach($group[1] as $tech)<span class="stagger-item"><i class="material-symbols-outlined">memory</i>{{ $tech }}</span>@endforeach</div></article>@endforeach</div></section>
