package org.comstudy.day01.ex01;

import java.util.Scanner;

// Ŭ������ ��ü�� ����� ���� ���� Ʋ�̴�.
public class Hello {
	// (Ŭ������) ��� �ʵ� ����
	// �ڹٴ� ������ ������ �� ������ Ÿ���� ǥ���ؾ� �Ѵ�.
//	static final String name = "ȫ�浿";
	static final Scanner scan = new Scanner(System.in);
	static final Scanner scanline = new Scanner(System.in);
	
	// Ŭ������ ������� �޼���� �ʵ尡 �ִ�.
	// ������� static�� ������ �Ͱ� �Ⱥ����� ���� �ִ�.
	// ��� �޼���
	public static void main(String[] args) {
		// (�޼�����) ���� ����: ���� ������ �ʱ�ȭ �ʼ�
		String name = "ȫ�浿";
		String address = "���ֽ� ����";
		int age = 25;	// Integer age;
		
		// �̸�, �ּ�, ���� �Է�
		System.out.print("�����Է�: ");
		name = scan.next();
		System.out.print("�ּ��Է�: ");
		address = scanline.nextLine();
		System.out.print("�����Է�: ");
		age = scan.nextInt();
		
		System.out.println("Hello world");
		System.out.println("����: " + name);
		System.out.println("�ּ�: " + address);
		System.out.println("����: " + age);
	}
}
