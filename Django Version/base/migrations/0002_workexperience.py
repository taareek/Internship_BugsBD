# Generated by Django 2.2.5 on 2022-03-06 06:09

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('base', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='WorkExperience',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('timeline', models.CharField(max_length=20)),
                ('position', models.CharField(max_length=50)),
                ('organization_name', models.CharField(max_length=100)),
                ('description', models.TextField()),
            ],
        ),
    ]
